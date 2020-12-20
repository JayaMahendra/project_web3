<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Book = new Book();
        $Book->judul = "PKI";
        $Book->isi = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil molestiae incidunt ducimus facere repellat ratione, veritatis odit, ipsa, delectus velit eius in modi corrupti adipisci perferendis recusandae saepe a neque. ";
        $Book->gambar = "https://cf.shopee.co.id/file/9f15bd08f7492f73218e2a30e64a0668";
        $Book->save();
     
        $Book2 = new Book();
        $Book2->judul = "Max Havellar";
        $Book2->isi = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil molestiae incidunt ducimus facere repellat ratione, veritatis odit, ipsa, delectus velit eius in modi corrupti adipisci perferendis recusandae saepe a neque. ";
        $Book2->gambar = "https://fagustin.files.wordpress.com/2016/05/max-havelaar.jpeg?w=640";
        $Book2->save();
    
        $Book3= new Book();
        $Book3->judul = "Habis Gelap Terbitlah Terang";
        $Book3->isi = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil molestiae incidunt ducimus facere repellat ratione, veritatis odit, ipsa, delectus velit eius in modi corrupti adipisci perferendis recusandae saepe a neque. ";
        $Book3->gambar = "https://cf.shopee.co.id/file/66f479375a88e22b7a21bf1daf0ec3bd";
        $Book3->save();

        $Book4 = new Book();
        $Book4->judul = "Di Bawah Bendera Revolusi";
        $Book4->isi = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil molestiae incidunt ducimus facere repellat ratione, veritatis odit, ipsa, delectus velit eius in modi corrupti adipisci perferendis recusandae saepe a neque. ";
        $Book4->gambar = "https://ecs7.tokopedia.net/img/cache/700/product-1/2016/9/1/506680/506680_330624ec-bf7f-4e26-912f-987433750e28";
        $Book4->save();

        $Book5 = new Book();
        $Book5->judul = "Tetralogi Buru";
        $Book5->isi = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil molestiae incidunt ducimus facere repellat ratione, veritatis odit, ipsa, delectus velit eius in modi corrupti adipisci perferendis recusandae saepe a neque. ";
        $Book5->gambar = "https://mmc.tirto.id/image/otf/880x495/2018/05/31/tetralogi-pramoedya-ananta-toer-tirto.jpg";
        $Book5->save();

        
        
    }
}