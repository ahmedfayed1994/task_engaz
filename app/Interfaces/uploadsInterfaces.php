<?php
namespace App\Interfaces;
use Illuminate\Support\ServiceProvider;

interface uploadsInterfaces
{
    public function dataType($data);

    public function json($data);

    public function file($file);

    public function xml($data);
}
