<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="css/test.css" />
    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css"
    />
    <title>首頁</title>
</head>
<x-app-layout>
<div class="container-fluid searchBlock px-lg-5 py-3 mb-3">
        <div class="row align-items-center justify-content-center ">
            <div class="col-12 col-lg-2 text-lg-right">
                <i class="fas fa-search"></i>
                搜尋
            </div>
            <div class="col-6 col-lg-2">
                <input
                list="animals"
                name="whatanimal"
                placeholder="查詢門科類：脊索動物門"
                class="my-1 w-100"
                />
                <datalist id="animals">
                <option value="貓熊"></option>
                <option value="大熊"></option>
                <option value="狗熊"></option>
                <option value="野熊"></option>
                <option value="無尾熊"></option>
                </datalist>
            </div>
            <div class="col-6 col-lg-2">
                <input
                list="animals"
                name="whatanimal"
                placeholder="查詢門科類：脊索動物門"
                class="my-1 w-100"
                />
                <datalist id="animals">
                <option value="貓熊"></option>
                <option value="大熊"></option>
                <option value="狗熊"></option>
                <option value="野熊"></option>
                <option value="無尾熊"></option>
                </datalist>
            </div>
            <div class="col-6 col-lg-2">
                <input
                list="animals"
                name="whatanimal"
                placeholder="查詢門科類：脊索動物門"
                class="my-1 w-100"
                />
                <datalist id="animals">
                <option value="貓熊"></option>
                <option value="大熊"></option>
                <option value="狗熊"></option>
                <option value="野熊"></option>
                <option value="無尾熊"></option>
                </datalist>
            </div>
            <div class="col-6 col-lg-2">
                <button type="button" class="btn btn-warning w-100">搜尋</button>
            </div>
        </div>
</div>
        <div class="container  animalBlock mt-3">
            <div class="row">
            <div class="col-6 col-lg-3 my-1">
                <a href="{{ asset('animal_file') }}" class="m-3"
                ><div class="card">
                    <div class="imgBlock">
                    <img
                        class="card-img-top w-100 hoverImg"
                        src="img/黑熊.jpg"
                    />
                    </div>
                    <div class="p-0 card-body text-center">
                    <div class="p-3">
                        <h3 class="card-title">黑熊</h3>
                        <p>亞洲動物區</p>
                        <p>數量:8</p>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="{{ asset('animal_file') }}" class="m-3"
                ><div class="card">
                    <div class="imgBlock">
                    <img
                        class="card-img-top w-100 hoverImg"
                        src="img/黑熊.jpg"
                    />
                    </div>
                    <div class="p-0 card-body text-center">
                    <div class="p-3">
                        <h3 class="card-title">黑熊</h3>
                        <p>亞洲動物區</p>
                        <p>數量:8</p>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="{{ asset('animal_file') }}" class="m-3"
                ><div class="card">
                    <div class="imgBlock">
                    <img
                        class="card-img-top w-100 hoverImg"
                        src="img/黑熊.jpg"
                    />
                    </div>
                    <div class="p-0 card-body text-center">
                    <div class="p-3">
                        <h3 class="card-title">黑熊</h3>
                        <p>亞洲動物區</p>
                        <p>數量:8</p>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="{{ asset('animal_file') }}" class="m-3"
                ><div class="card">
                    <div class="imgBlock">
                    <img
                        class="card-img-top w-100 hoverImg"
                        src="img/黑熊.jpg"
                    />
                    </div>
                    <div class="p-0 card-body text-center">
                    <div class="p-3">
                        <h3 class="card-title">黑熊</h3>
                        <p>亞洲動物區</p>
                        <p>數量:8</p>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            </div>
        </div>
</x-app-layout>