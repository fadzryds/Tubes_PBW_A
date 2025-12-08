<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SparepartController extends Controller
{
    private $spareparts = [
        1 => [
            'id' => 1,
            'name' => 'Oli Mesin',
            'price' => 2000000,
            'description' => 'Oli mesin berkualitas untuk menjaga performa kendaraan.',
            'image' => 'oli.jpeg'
        ],
        2 => [
            'id' => 2,
            'name' => 'Aki Motor',
            'price' => 2000000,
            'description' => 'Aki motor dengan daya kuat dan tahan lama.',
            'image' => 'aki.jpeg'
        ],
        3 => [
            'id' => 3,
            'name' => 'Kampas Rem',
            'price' => 2000000,
            'description' => 'Kampas rem aman dan memberikan pengereman optimal.',
            'image' => 'kampas.jpg'
        ],
        4 => [
            'id' => 4,
            'name' => 'V-Belt Motor',
            'price' => 2000000,
            'description' => 'V-Belt berkualitas tinggi untuk motor matic.',
            'image' => 'v-belt.jpeg'
        ],
        5 => [
            'id' => 5,
            'name' => 'Oli Mesin',
            'price' => 2000000,
            'description' => 'Oli mesin berkualitas untuk menjaga performa kendaraan.',
            'image' => 'oli.jpeg'
        ],
        6 => [
            'id' => 6,
            'name' => 'Aki Motor',
            'price' => 2000000,
            'description' => 'Aki motor dengan daya kuat dan tahan lama.',
            'image' => 'aki.jpeg'
        ],
        7 => [
            'id' => 7,
            'name' => 'Kampas Rem',
            'price' => 2000000,
            'description' => 'Kampas rem aman dan memberikan pengereman optimal.',
            'image' => 'kampas.jpg'
        ],
        8 => [
            'id' => 8,
            'name' => 'V-Belt Motor',
            'price' => 2000000,
            'description' => 'V-Belt berkualitas tinggi untuk motor matic.',
            'image' => 'v-belt.jpeg'
        ],
        9 => [
            'id' => 9,
            'name' => 'Oli Mesin',
            'price' => 2000000,
            'description' => 'Oli mesin berkualitas untuk menjaga performa kendaraan.',
            'image' => 'oli.jpeg'
        ],
        10 => [
            'id' => 10,
            'name' => 'Aki Motor',
            'price' => 2000000,
            'description' => 'Aki motor dengan daya kuat dan tahan lama.',
            'image' => 'aki.jpeg'
        ],
        11 => [
            'id' => 11,
            'name' => 'Kampas Rem',
            'price' => 2000000,
            'description' => 'Kampas rem aman dan memberikan pengereman optimal.',
            'image' => 'kampas.jpg'
        ],
        12 => [
            'id' => 12,
            'name' => 'V-Belt Motor',
            'price' => 2000000,
            'description' => 'V-Belt berkualitas tinggi untuk motor matic.',
            'image' => 'v-belt.jpeg'
        ],
    ];

    public function show($id)
    {
        $sparepart = $this->spareparts[$id] ?? null;

        if (!$sparepart) {
            abort(404, "Sparepart tidak ditemukan");
        }

        $otherSpareparts = array_filter($this->spareparts, function ($item) use ($id) {
            return $item['id'] != $id;
        });

        return view('landing.description', compact('sparepart', 'otherSpareparts'));
    }
}
