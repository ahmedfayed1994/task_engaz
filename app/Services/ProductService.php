<?php


namespace App\Services;


use App\Interfaces\uploadsInterfaces;

class ProductService implements uploadsInterfaces
{
    public function dataType($data)
    {
        $file = $data->file('file');

        if ($file) {
            $this->file($file);
        }

        if ($data->product_json) {
            $this->json($data->product_json);
        }

        if ($data->product_xml) {
            $this->xml($data->product_xml);
        }

    }

    public function file($file)
    {
        $extention = $file->getClientOriginalExtension();
        if ($extention === "csv") {
            $this->csv($file);
        } elseif ($extention === "json") {
            $this->jsonFile($file);
        } else {
            return false;
        }
    }

    public function xml($data)
    {
        // add product by xml collection
    }

    public function json($data)
    {
        // add product by json collection

        //result
        return $data;
    }

    public function csv($file)
    {
        // add product by csv file

        //result
        return $file;
    }

    public function jsonFile($file)
    {
        // add product by json file

        //result
        return $file;
    }

}
