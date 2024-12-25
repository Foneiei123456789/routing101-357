<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    private $products = [ 
        ['id' => 1, 'name' => 'ผักบุ้ง', 
            'description' => 'คุณค่าทางโภชนาการผักบุ้ง 100 กรัม จะให้พลังงาน 22 กิโลแคลอรี และประกอบไปด้วยด้วยเส้นใยไฟเบอร์ วิตามิน แร่ธาตุอื่น ๆ เช่น วิตามินเอ วิตามินซี วิตามินบี1 วิตามินบี2 วิตามินบี3 แคลเซียม ฟอสฟอรัส ธาตุเหล็ก', 
            'price' => 50,
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLlBR5D7DO0inBHfavmYVUVzJjULNwGXpDBvuSZGFjah5nIvVOktBTa24g7LNz2R-dfas&usqp=CAU' ], 

        ['id' => 2, 'name' => 'เห็ด', 
            'description' => 'เป็นแหล่งโปรตีนจากธรรมชาติที่มีแคลอรี่ต่ำ มีไขมันต่ำและน้ำตาลค่อนข้างน้อย มีแร่ธาตุและวิตามินกว่า 15 ชนิด ได้แก่ โฟเลต ซิลิเนียม สังกะสี ทองแดง แมกนีเซียม โพแทสเซียม วิตามินบีรวม และวิตามินดี ยกตัวอย่างข้อมูลโภชนาการของเห็ดแชมปิญองสีน้ำตาล ปริมาณ 1 ถ้วยตวง ให้แคลอรี่เท่ากับ 15 kcal ประกอบด้วยโปรตีน 2.2 กรัม ไขมัน 0.2 กรัม คาร์โบไฮเดรต 2.3 กรัม เส้นใยอาหาร 0.7 กรัม และน้ำตาล 1.4 กรัม', 
            'price' => 45,
            'image' => 'https://pharmacy.mahidol.ac.th/knowledge/picture/0556-1.gif' ], 

        ['id' => 3, 'name' => 'ต้นหอม', 
            'description' => 'ข้อมูลโภชนาการ, แคลอรี่, พลังงาน และสารอาหาร ใน ต้นหอม ในปริมาณ 1 cup (100g) มีพลังงานทั้งหมด 32 กิโลแคลอรี่, โปรตีน 1.8 กรัม, คาร์โบไฮเดรต 7.3 กรัม, ไขมัน 0.2 กรัม เราสามารถดูรายละเอียดข้อมูลอื่นๆ เข่น เกลือโซเดียม, คอเลสเตอรอล, วิตามิน, ไขมันอิ่มตัว, ไขมันไม่อิ่มตัว, น้ำตาล, กากไยอาหาร ฯลฯ ได้จากตารางด้านล่างครับ', 
            'price' => 150,
            'image' => 'http://bannongphi.ac.th/_files_school/60102512/data/60102512_0_20200830-102738.jpg' ], 

        ['id' => 4, 'name' => 'พริก', 
            'description' => 'ข้อมูลโภชนาการ, แคลอรี่, พลังงาน และสารอาหาร ใน พริก, แดง ในปริมาณ 100g มีพลังงานทั้งหมด 40 กิโลแคลอรี่, โปรตีน 1.9 กรัม, คาร์โบไฮเดรต 8.8 กรัม, ไขมัน 0.4 กรัม เราสามารถดูรายละเอียดข้อมูลอื่นๆ เข่น เกลือโซเดียม, คอเลสเตอรอล, วิตามิน, ไขมันอิ่มตัว, ไขมันไม่อิ่มตัว, น้ำตาล, กากไยอาหาร ฯลฯ ได้จากตารางด้านล่างครับ', 
            'price' => 100,
            'image' => 'http://www.bannongphi.ac.th/_files_school/60102512/data/60102512_0_20200727-215138.jpg' ], 

        ['id' => 5, 'name' => 'แตงกวา', 
            'description' => 'คุณค่าทางโภชนาการของแตงกวาพร้อมเปลือก ต่อ 100 กรัม พลังงาน 16 กิโลแคลอรี คาร์โบไฮเดรต 3.63 กรัม น้ำตาล 1.67 กรัม เส้นใย 0.5 กรัม ไขมัน 0.11 กรัม
                โปรตีน 0.65 กรัม น้ำ 95.23 กรัม วิตามินบี1 0.027 มิลลิกรัม 2% วิตามินบี2 0.033 มิลลิกรัม 3% วิตามินบี3 0.098 มิลลิกรัม 1% วิตามินบี5 0.259 มิลลิกรัม 5% วิตามินบี6 0.04 มิลลิกรัม 3%
                วิตามินบี9 7 ไมโครกรัม 2% วิตามินซี 2.8 มิลลิกรัม 3% วิตามินเค 16.4 ไมโครกรัม ธาตุแคลเซียม 16 มิลลิกรัม 2% ธาตุเหล็ก 0.28 มิลลิกรัม 2% ธาตุแมกนีเซียม 13 มิลลิกรัม 4% ธาตุแมงกานีส 0.079 มิลลิกรัม 4%
                ธาตุฟอสฟอรัส 24 มิลลิกรัม 3% ธาตุโพแทสเซียม 147 มิลลิกรัม 3% ธาตุโซเดียม 2 มิลลิกรัม 0% ธาตุสังกะสี 0.2 มิลลิกรัม 2% ธาตุฟลูออไรด์ 1.3 ไมโครกรัม 11%', 
            'price' => 120,
            'image' => 'https://static.thairath.co.th/media/4DQpjUtzLUwmJZZSCHsfcRbtt17XrDgWlwwnn9e3y66q.jpg' ], 

        ['id' => 6, 'name' => 'ผักสลัด', 
            'description' => 'ข้อมูลโภชนาการ, แคลอรี่, พลังงาน และสารอาหาร ใน กรีนโอ๊ค, ผักสลัด ในปริมาณ 100 g มีพลังงานทั้งหมด 56 กิโลแคลอรี่, โปรตีน 3 กรัม, คาร์โบไฮเดรต 11 กรัม, ไขมัน 0 กรัม', 
            'price' => 200,
            'image' => 'https://vc1i.rweb-images.com/www.h2ohydrogarden.com/images/column_1461561122/395091_496480683707011_1343349949_n(2).jpg' ], 

            ['id' => 7, 'name' => 'ฟักทอง', 
            'description' => 'Hพลังงานทั้งหมด 26 กิโลแคลอรี่ ข้อมูลโภชนาการ, แคลอรี่, พลังงาน และสารอาหาร ใน ฟักทอง ในปริมาณ 100g มีพลังงานทั้งหมด 26 กิโลแคลอรี่, โปรตีน 1 กรัม, คาร์โบไฮเดรต 6.5 กรัม, ไขมัน 0.1 กรัม ', 
            'price' => 45,
            'image' => 'https://img.kapook.com/u/2016/pree/P/q2_81.jpg' ],     

        ['id' => 8, 'name' => 'แครอท', 
            'description' => 'พลังงานทั้งหมด 46 กิโลแคลอรี่ ข้อมูลโภชนาการ, แคลอรี่, พลังงาน และสารอาหาร ใน แครอท ในปริมาณ 100g มีพลังงานทั้งหมด 46 กิโลแคลอรี่, โปรตีน 0.9 กรัม, คาร์โบไฮเดรต 10 กรัม, ไขมัน 0.2 กรัม', 
            'price' => 45,
            'image' => 'https://igarden.decorexpro.com/wp-content/uploads/2019/07/pochemu-morkov-gorchit-i-kak-etogo-ne-dopustit.jpg' ],      

        ['id' => 9, 'name' => 'บล็อคเคอรี่', 
            'description' => 'พลังงานทั้งหมด 34 กิโลแคลอรี่ ข้อมูลโภชนาการ, แคลอรี่, พลังงาน และสารอาหาร ใน บร็อคโคลี่ ในปริมาณ 100g มีพลังงานทั้งหมด 34 กิโลแคลอรี่, โปรตีน 2.8 กรัม, คาร์โบไฮเดรต 6.6 กรัม, ไขมัน 0.4 กรัม', 
            'price' => 250,
            'image' => 'https://www.cheewajit.com/app/uploads/2016/04/vegetables-01.jpg' ],
            
        ['id' => 10, 'name' => 'มะเขือเทศ', 
            'description' => 'พลังงานทั้งหมด 18 กิโลแคลอรี่ ข้อมูลโภชนาการ, แคลอรี่, พลังงาน และสารอาหาร ใน มะเขือเทศ ในปริมาณ 100g มีพลังงานทั้งหมด 18 กิโลแคลอรี่, โปรตีน 1 กรัม, คาร์โบไฮเดรต 4 กรัม, ไขมัน 0.1 กรัม  ', 
            'price' => 100,
            'image' => 'https://morkeaw.net/wp-content/uploads/2021/08/%E0%B8%A1%E0%B8%B0%E0%B9%80%E0%B8%82%E0%B8%B7%E0%B8%AD%E0%B9%80%E0%B8%97%E0%B8%A8-1.jpg' ],   

       
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('Products/Index', ['products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = collect($this->products)->firstWhere('id', $id); 
        
        if (!$product) { 
            abort(404, 'Product not found'); 
        } 

        return Inertia::render('Products/Show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}