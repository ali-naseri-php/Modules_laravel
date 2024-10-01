<div class="p-6 bg-gray-100">
    @if (session('success'))
        <div class="text-green-600 bg-green-100 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($propertis as $item)
            <div class="border border-gray-400 p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">{{ $item->name }}</h4>
                    <p class="text-sm text-gray-600">دسته‌بندی: <span class="font-medium">{{ $item->nameCategory() }}</span></p>


                    <div class="mt-4 flex justify-between">
                        <button type="button" href="#" >
                            ویرایش
                        </button>
                        <form  method="POST" class="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition" onclick="return confirm('آیا مطمئن هستید می‌خواهید این دسته‌بندی را حذف کنید؟')">
                                حذف
                            </button>
                        </form>
                    </div>
            </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $propertis->links() }}
    </div>
</div>
