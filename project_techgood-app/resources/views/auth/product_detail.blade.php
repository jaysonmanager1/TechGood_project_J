@extends('dashboard')
<link rel="stylesheet" href="{{ asset('./front-end/css/productdetail-style.css') }}">
@section('content_detail')
    <div class="breadcrumb">
        <p>Tất cả sản phẩm</p>
    </div>
    <section class="box-details">
        <form action="#" class="form-details">
            <div class="img-details">
                <div class="box-imgs">
                    <div class="imgs-left">
                        <div class="img-small">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                alt="" width="100" height="100">
                        </div>
                        <div class="img-small">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                alt="" width="100" height="100">
                        </div>
                        <div class="img-small">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                alt="" width="100" height="100">
                        </div>

                        <div class="img-small">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                alt="" width="100" height="100">
                        </div>
                        <div class="img-small">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                alt="" width="100" height="100">
                        </div>
                    </div>
                    <div class="imgs-right">
                        <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                            alt="" width="500" height="508">
                    </div>
                </div>
            </div>
            <div class="text-details">
                <div class="name-product">
                    Tên sản phẩm
                </div>
                <div class="description-product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, nihil ipsa!
                    Fuga quia dolorem omnis dolorum? Exercitationem eum autem voluptatum possimus accusantium aliquid quam
                    est doloremque officia, perspiciatis hic reprehenderit aliquam odit, corporis, quae repellat soluta
                    maxime expedita quod? Optio, maxime perferendis iusto sit ab error doloribus commodi sed suscipit!</div>
                <div class="color-product">
                    <p>Màu:</p>
                    <label for="color" class="color"></label>
                    <input type="radio" name="color" id="color">

                    <label for="color" class="color"></label>
                    <input type="radio" name="color" id="color">

                    <label for="color" class="color"></label>
                    <input type="radio" name="color" id="color">
                </div>
                <div class="type-product">
                    <p>Kiểu máy:</p>
                    <select name="type-model" id="type-model">
                        <option value="model">Kiểu máy 1</option>
                        <option value="model">Kiểu máy 2</option>
                        <option value="model">Kiểu máy 3</option>
                    </select>
                </div>
                <div class="quantity-product">
                    <p>Số lượng:</p>
                    <div class="box-number">
                        <div class="minus">-</div>
                        <div class="numbers">1</div>
                        <div class="plus">+</div>
                    </div>
                </div>
                <div class="addtocard">
                    <button type="submit" class="btn-addtocart">Add to cart</button>
                </div>
            </div>
        </form>
    </section>
@endsection
