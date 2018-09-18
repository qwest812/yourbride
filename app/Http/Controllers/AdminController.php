<?php

namespace App\Http\Controllers;

//use Request ;
use App\Category;
use App\Page;
use Illuminate\Http\Request;
use function Sodium\compare;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    /**
     * Show all pages
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function addPageSites()
    {
        $categorys = Category::all();
        $categorys = $categorys->toArray();
        return view('bright.admin.add.add-page', compact('categorys'));
    }

    /**
     * Show all categories
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function addCategorySites()
    {
        return view('bright.admin.add.add-category');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function editPage($id)
    {
        $page = Page::find($id);
        $categories = (Category::all())->toArray();
        $myCategory = ($page->categories)->toArray();
        $flag = '';
        $newCategories = [];
        foreach ($categories as $key => $category) {
            $flag = false;

            foreach ($myCategory as $mycat) {
                if ($category['id'] == $mycat['id']) {
                    $categories[$key]['check'] = true;
                }
            }
        }
        $page['category_id'] = $categories;
        return view('bright.admin.edit-page', compact('page', 'categories'));
    }

    function editCategory($id)
    {
        $category = Category::find($id);
//        $category=$category->toArray();
//        echo '<pre>';
//        var_dump($category->toArray());
//        echo '</pre>';
        return view('bright.admin.edit-category', compact('category'));
    }

    /**
     * save page
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function savePage(Request $request)
    {
        $input = $request->all();
        unset($input['files']);
        if (isset($input['category_id'])) {
            $categories = $input['category_id'];
            unset($input['category_id']);
        }
        $file = $request->file('image');
        $path = $this->saveImg($file);
        $input['image'] = $path;
        $site = Page::create($input);
        $page = Page::find($site->id);
        if (isset($categories)) {
            $rel = $this->createRelationshipPageToCategory($page, $categories);
        }
        return redirect('admin/pages');
    }

    function updatePage(Request $request, $id)
    {
        $page = Page::find($id);
        $input = $request->toArray();
        if (!isset($input['image'])) {
            $input['image'] = $page['image'];
        } else {
            $file = $request->file('image');
            $path = $this->saveImg($file);
            $input['image'] = $path;
        }
        if (isset($input['category_id'])) {
            $category_id = $input['category_id'];
            unset($input['category_id']);
            $categoryThisPage = $page->categories;
            $this->detachCategory($page, $categoryThisPage->toArray());
            $this->createRelationshipPageToCategory($page, $category_id);
        }
        $page->update($input);
        return redirect('/admin/edit/page/' . $id);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $input = $request->toArray();
        $category->update($input);
        return redirect('/admin/edit/category/' . $id);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function saveCategory(Request $request)
    {
        $input = $request->all();
        $category = Category::create($input);
        if ($category->id) {
            return redirect('admin/categories');
        }
        return 'Error';
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function deleteCategory($id)
    {
        $category = Category::find($id);
        if($category){

            $detach = $category->pages()->detach();
            $category->delete();
        }
        return redirect('admin/categories');
    }
    function  deletePage($id){
        $page=Page::find($id);
        if($page){
            $detach =$page->categories()->detach();
            $page->delete();
        }
        return redirect('admin/pages');
    }

    /**
     * Show all categories
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function categories()
    {
        $allCategories = Category::all();
        $allCategories = $allCategories->toArray();
        return view('bright.admin.categories', compact('allCategories'));
    }


    /**
     * Show all pages
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function pages()
    {
        $pages = Page::all();
        $pages = $pages->toArray();
        return view('bright.admin.pages', compact('pages'));
    }

    function test(Request $request)
    {
        if ($request->isMethod('post')) {
            $path = public_path() . '\images\\';
            $file = $request->file('file');
            $filename = str_random(20) . '.' . $file->getClientOriginalExtension() ?: 'png';
            $img = Image::make($file);
            $img->save($path . $filename);
            echo '/images/' . $filename;
        }

        return view('bright.admin.test');

    }

    /**
     * Save img to store/app/img
     * @param Request $request
     */
    public function upload(Request $request)
    {
        $originalFileName = $request->file()['file']->getClientOriginalName();
        $path_img = ($request->file()['file'])->storeAS('images', $originalFileName);
        echo '/storage/images/' . $originalFileName;
    }

    /**
     * Save Images
     * @param $file
     * @return string
     */
    protected function saveImg($file)
    {

        if ($file) {
            $originalFileName = $file->getClientOriginalName();
            $path_img = $file->storeAS('images', $originalFileName);
            return 'storage/' . $path_img;
        } else {
            return 'no-img.jpg';
        }
    }

    /**
     * create Relationship Page and Categories
     * @param Page $page
     * @param array $categories
     * @return bool
     */
    protected function createRelationshipPageToCategory(Page $page, array $categories)
    {
        $page->categories()->attach($categories);
        return true;
    }

    /**
     *
     * @param Page $page
     * @param array $categories
     * @return int
     */
    protected function detachCategory(Page $page, array $categories)
    {
        $id = [];
        foreach ($categories as $category) {
            $id[] = $category['id'];
        }
        return $page->categories()->detach($id);


    }

}
