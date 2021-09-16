<form class="m-3 p-3" action="" method="POST">
  @csrf

  <div class="flex flex-row ">
    <div class="w-6/12 ">
      <input type="text" id="address" name="address" autocomplete="off" class="p-2 w-full bg-gray-200 rounded-md" placeholder="Address">
  </div>

  <div class="w-6/12 ml-5">
    <select class="p-2 mr-5 bg-gray-200 w-full rounded-md" name="category">
      <option value="">Select Category</option>
    </select>
</div>
<div class="ml-5">
 <button type="submit" class="py-2 px-5 bg-gray-500 hover:bg-gray-400 text-white mr-5 rounded-md">Search</button>
</div>
  </div>

</form>


<section class="m-auto text-center">
  <div class="category mt-5">
    <ul class="md:flex-grow mr-8 mt-2 flex items-center justify-center flex-warp">
      @foreach ($categories  as $category)
          <li class="">
            <a href="{{route('category.show',$category->slug)}}" class="inline-block mr-2 tracking-wide text-indigo-500 text-l font-medium title-font py-0.5 px-1.5 border border-indigo-500" href="">{{$category->title}}</a>
          </li>
      @endforeach
    </ul>
  </div>
</section>


