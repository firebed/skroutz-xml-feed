<?php

namespace Firebed\Skroutz;

class SkroutzProduct
{
    public int $id;
    public string $name;
    public string $link;
    public string $image;
    public array $additional_images = [];
    public string $category;
    public float $price;
    public string $manufacturer;
    public string $mpn;
    public string $ean;
    public string $instock;
    public $availability;
    public $size;
    public string $weight;
    public string $color;
    public string $description;
}