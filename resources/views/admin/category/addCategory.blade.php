@extends('layouts.admin') @section('content')

<div class="p-8">
    <h1 class=" text-[#1670B7] font-bold text-lg">Add Category</h1>
    <form>
        <section class="w-full py-10">
            <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden">
                <div class="px-4 py-6">
                    <div id="image-preview" class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg mx-auto text-center cursor-pointer">
                        <input id="upload" type="file" class="hidden" accept="image/*" />
                        <label for="upload" class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-700 mx-auto mb-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                            </svg>
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload Category Image</h5>
                            <p class="font-normal text-sm text-gray-400 md:px-6">Choose photo size should be less than <b class="text-gray-600">2mb</b></p>
                            <p class="font-normal text-sm text-gray-400 md:px-6">and should be in <b class="text-gray-600">JPG, PNG, or GIF</b> format.</p>
                            <span id="filename" class="text-gray-500 bg-gray-200 z-50"></span>
                        </label>
                    </div>
                </div>
            </div>
        </section>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name * :</label>
                <input type="text" id="category_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required>
            </div>
        </div>

        <div class="max-w-md py-4">
            <div id="form-container">
            </div>
            <div class="flex flex-row">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #1670b7
                        }
                    </style>
                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                </svg>
                <button id="add-fields" class=" text-[#1670B7] font-medium mr-2 px-2.5 -mt-1 rounded">Add New Sub Category</button>
            </div>
        </div>


        <button type="submit" class="text-white bg-[#2BB673] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-normal text-base w-full sm:w-auto px-12 py-2.5 text-center">Save</button>
        <button type="submit" class="text-white bg-[#D2042D] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-normal text-base w-full sm:w-auto px-6 py-2.5 text-center ">Cancel</button>
    </form>
</div>
@endsection