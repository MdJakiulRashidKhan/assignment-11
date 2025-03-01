@extends('layouts.app')

@section('title', 'Update Product')

@section('page-title', 'Update product')

@section('content')
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="text-center mb-4">Multi-Step Form</h2>
            <form id="example-form" action="/update_product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="wizard-content">
                    <h3>Product Details</h3>
                    <section>
                        <div class="row px-md-3 mb-3">
                            <label for="userName" class="form-label">Name <span>*</span></label>
                            <input id="userName" name="name" type="text" class="form-control required"
                                value="{{ $product->name }}" />
                        </div>
                        <div class="row px-md-3 mb-3">
                            <label for="password" class="form-label">Category <span>*</span></label>
                            <select name="category" value="love" id="" class="form-select select2 required">
                                <option value="">select category</option>
                                <option value="Men's Clothing">Men's Clothing</option>
                                <option value="Women's Clothing">Women's Clothing</option>
                                <option value="Footwear">Footwear</option>
                                <option value="Watches & Jewelry">Watches & Jewelry</option>
                            </select>
                        </div>
                        <div class="row px-md-3">
                            <label for="confirm" class="form-label">Price <span>*</span></label>
                            <input type="text" name="price" class="form-control required" value="{{ $product->price }}" />
                        </div>
                    </section>
                    <h3>Product Descriptions</h3>
                    <section>
                        <div class="row px-md-3">
                            <label for="" class="form-label">Short or Long Description</label>
                            <textarea name="description" id="productDesc" rows="12">{{ $product->description }}</textarea>
                        </div>
                        <div class="col-span-full mt-4">
                            <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Product
                                Image <span>*</span></label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm/6 text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                            <input type="file" name="image" accept=".png, .jpg, .jpeg" class="required"
                                                value="{{ $product->image }}">
                                        </label>
                                    </div>
                                    <p class="text-xs/5 text-gray-600">PNG, JPG up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h3>Additional Details</h3>
                    <section>
                        <div class="row px-md-3 mb-3">
                            <label for="password" class="form-label">Status <span class="text-primary h5">*</span></label>
                            <select name="status" id="" class="form-select select2 required" style="width:100%">
                                <option value="">select Status</option>
                                <option value="In Stock">In Stock</option>
                                <option value="Stock Out">Out of Stock</option>
                            </select>
                        </div>
                        <div class="row px-md-3 mb-3">
                            <label for="" class="form-label">Stock <span>*</span></label>
                            <input type="text" name="stock" class="form-control required" placeholder="100"
                                value="{{ $product->stock }}">
                        </div>
                        <div class="row px-md-3 mb-3">
                            <label for="" class="form-label">SEO Tags <span>*</span></label>
                            <select name="tags" id="" class="form-select select2 required" multiple="multiple"
                                style="width:100%">
                                <option value="">select category</option>
                                <option value="New Arrival">New Arrival</option>
                                <option value="Best Seller">Best Seller</option>
                                <option value="Trending">Trending</option>
                                <option value="Exclusive">Exclusive</option>
                                <option value="Clearance">Clearance</option>
                            </select>
                        </div>
                    </section>
                    <h3>Review & Confirmation</h3>
                    <section>
                        <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required" />
                        <label for="acceptTerms" class="form-label mt-2">I agree with all the informations are
                            correct.</label>
                    </section>
                </div>
                <button type="submit" id="myButton" style=" visibility: hidden">Submit</button>
            </form>
        </div>
    </div>
@endsection