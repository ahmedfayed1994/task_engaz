<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Services\XmlData;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ConsumerController extends Controller
{

    protected $productService;

    /**
     * Create a new controller instance.
     *
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    //

    /**
     * @param Request $request
     * @throws ValidationException
     */
    public function store(Request $request)
    {

        $rules = [
            'file' => 'required|file|mimes:xml,csv,xlsx',
        ];

        $this->validate($request, $rules);

        return $this->productService->dataType($request->all());

    }
}
