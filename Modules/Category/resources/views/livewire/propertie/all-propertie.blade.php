<div class="p-6 bg-gray-50 rounded-lg shadow-md">
    @if (session('success'))
        <div class="text-green-700 bg-green-100 p-4 rounded-lg border border-green-300 mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($propertis as $item)
            <div class="border border-gray-300 p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow bg-white">
                <h4 class="text-lg font-bold text-gray-800 mb-3">{{ $item->name }}</h4>
                <p class="text-sm text-gray-600 mb-4">
                    دسته‌بندی:
                    <span class="font-medium text-gray-800">{{ $item->nameCategory() }}</span>
                </p>
                <div class="mt-4 flex space-x-4">
                    <a href="#" class="text-yellow-500 bg-yellow-100 px-4 py-2 rounded-lg shadow hover:bg-yellow-200 transition duration-200">
                        ویرایش
                    </a>
                    <form method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow hover:bg-red-600 transition duration-200" onclick="return confirm('آیا مطمئن هستید می‌خواهید این دسته‌بندی را حذف کنید؟')">
                            حذف
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $propertis->links() }}
    </div>
</div>
