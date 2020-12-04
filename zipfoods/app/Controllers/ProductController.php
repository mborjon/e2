<?php
namespace App\Controllers;

class ProductController extends Controller
{
    private $products;
    public function __construct($app)
    {
        parent::__construct($app);
    }

    public function index()
    {
        return $this->app->view('products.index', [
            'products' => $this->app->db()->all('products')

            ]);
    }
    
    public function show()
    {
        $id = $this->app->param('id');

        # If no id is present, send the user to the products page
        if (is_null($id)) {
            $this->app->redirect('/products');
        }

        //$product = $this->products->getById($id);
        $product = $this->app->db()->findById('products', $id);

        # If no id is present, send the user to the products page
        if (is_null($product)) {
            //return $this->app->view('errors.404');
            return $this->app->view('products.missing', ['id' => $id]);
        }
        # Load the review detail
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);

        # If the user submitted the review form, we'll have a confirmation name
        # that we'll pass to the view to show them a confirmation message
        $confirmationName = $this->app->old('confirmationName');
        
        return $this->app->view('products.show', [
            'product' => $product,
            'reviews' => $reviews,
            'confirmationName' => $confirmationName
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([
    'name' => 'required',
    'content' => 'required|minLength:200', # Note how multiple validation rules are separated by a |
]);

        # This following line would only get executed *if* all of the above validation tests passed
        # Otherwise, the user is auto-redirected back to the form

        $name = $this->app->input('name');
        $content = $this->app->input('content');
        $id = $this->app->input('id');

        #insert into the database

        $data = [
            'name' => $name,
            'content' => $content,
            'product_id' => $id,

        ];

        $this->app->db()->insert('reviews', $data);

        $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);
    }
}