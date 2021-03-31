<div class="bg-white border border-gray-200 px-4 py-3 rounded-md">
  <div class="flex items-start justify-between">
    <h2 class="text-lg leading-6 font-semibold"><a
        class="text-blue-600 hover:text-blue-700 hover:underline duration-300" href="#">{{ $post->title }}</a></h2>
    <ul class="flex space-x-2">
      <li><a href="{{ route('posts.edit', ['post_id' => $post->id]) }}">
          <x-heroicon-o-pencil-alt class="h-5 w-5 text-blue-600 hover:text-blue-800 duration-200 flex-shrink-0" />
        </a></li>
      <li><a href="javascript:void(0)">
          <x-heroicon-o-trash class="h-5 w-5 text-red-500 hover:text-red-700 duration-200 flex-shrink-0" /></a>
      </li>
    </ul>
  </div>

  <p class="text-gray-600 mt-3 text-justify leading-5">
    {!! $post->content !!}
  </p>
</div>