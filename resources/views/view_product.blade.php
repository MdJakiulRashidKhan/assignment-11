@extends('layouts.app')

@section('title', 'View Product')

@section('page-title', 'View Product')

@section('content')
    <div class="mx-3 p-3 bg-white">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset($product->image) }}" alt="" class="w-100 rounded" style="height: 450px">
                    </div>
                    <div class="col-md-7">
                        <h2>{{ $product->name }}</h2>
                        <div class="text-end text-primary">
                            <span style="font-size:25px; margin-right: 10px;"><i class="fa-solid fa-share-nodes"></i></span>
                            <span style="font-size:25px; margin-right: 10px;"><i class="fa-regular fa-heart"></i></span>
                        </div>
                        <hr>
                        <div>
                            <p class="text-secondary" style="font-weight:600">Brand: <span class="text-primary">No Brand |
                                    {{ $product->tags }}</span></p>

                            <div class="d-flex flex-row justify-content-between" style="margin:20px 0">
                                <p class="text-secondary" style="font-weight:600">Category: <span
                                        class="text-primary">{{ $product->category }}</span></p>
                                <p class="text-secondary" style="font-weight:600">Status: <span
                                        class="text-primary">{{ $product->status }}</span></p>
                            </div>
                            <div>
                                <h2 style="color:#DE3163; font-size:42px">$ {{ $product->price }}</h2>
                                <p class="text-secondary" style="font-weight:600; margin-top: 20px;">Stock: <span
                                        class="text-primary">{{ $product->stock }}</span></p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn w-100 text-white"
                                        style="font-size:20px; background-color: #73C7C7;">Buy
                                        Now</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn w-100 text-white"
                                        style="font-size:20px; background-color: #DE3163;">Add to
                                        Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
            <div class="mt-5 .row">
                <div class="col-md-9">
                    <p>
                        {{ $product->description }}
                    </p>
                </div>
            </div>
            <div class="row bg-secondary rounded py-5 my-5">
                <h3 class="text-center text-white py-1">Any Question <i class="fa-solid fa-clipboard-question"
                        style="color: #F0A04B"></i></h3>
                <form action="" class="w-50 mx-auto">
                    <div class="div">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email.">
                    </div>
                    <div class="my-2">
                        <textarea name="message" id="" rows="7" class="form-control"
                            placeholder="Write message..."></textarea>
                    </div>
                    <div class="div text-center">
                        <button type="submit" class="btn text-white w-50" style="background-color: #73C7C7;">Send</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection