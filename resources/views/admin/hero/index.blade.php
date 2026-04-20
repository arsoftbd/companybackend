<x-app-layout>
    <div class="max-w-5xl mx-auto">
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-slate-800">Update Hero Section</h2>
            <p class="text-sm text-slate-500">Update your hero section information below</p>
        </div>

        @if (session('success'))
            <div class="mb-4 rounded-2xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.hero.update', $hero->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
            @csrf
            @method('PUT')

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Badge</label>
                <input type="text" name="badge" value="{{ old('badge', $hero->badge) }}"
                    class="w-full rounded-xl border border-slate-300 px-4 py-2.5 outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                    placeholder="Enter badge">
                @error('badge')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Title</label>
                <input type="text" name="title" value="{{ old('title', $hero->title) }}"
                    class="w-full rounded-xl border border-slate-300 px-4 py-2.5 outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                    placeholder="Enter title">
                @error('title')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Description</label>
                <textarea name="description" rows="4"
                    class="w-full rounded-xl border border-slate-300 px-4 py-2.5 outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                    placeholder="Enter description">{{ old('description', $hero->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Current Image</label>
                @if ($hero->image)
                    <img src="{{ asset('storage/' . $hero->image) }}" alt="Hero Image"
                        class="mb-3 h-28 w-40 rounded-2xl object-cover border border-slate-200">
                @else
                    <p class="mb-3 text-sm text-slate-400">No image uploaded yet.</p>
                @endif

                <label class="mb-2 block text-sm font-semibold text-slate-700">New Image</label>
                <input type="file" name="image"
                    class="w-full text-sm text-slate-600 file:mr-4 file:rounded-xl file:border-0 file:bg-indigo-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-indigo-600 hover:file:bg-indigo-100">
                @error('image')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-semibold text-slate-700">Button One Text</label>
                    <input type="text" name="button_text_one"
                        value="{{ old('button_text_one', $hero->button_text_one) }}"
                        class="w-full rounded-xl border border-slate-300 px-4 py-2.5 outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                        placeholder="Button 1 text">
                    @error('button_text_one')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-2 block text-sm font-semibold text-slate-700">Button One Link</label>
                    <input type="text" name="button_link_one"
                        value="{{ old('button_link_one', $hero->button_link_one) }}"
                        class="w-full rounded-xl border border-slate-300 px-4 py-2.5 outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                        placeholder="https://example.com">
                    @error('button_link_one')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-2 block text-sm font-semibold text-slate-700">Button Two Text</label>
                    <input type="text" name="button_text_two"
                        value="{{ old('button_text_two', $hero->button_text_two) }}"
                        class="w-full rounded-xl border border-slate-300 px-4 py-2.5 outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                        placeholder="Button 2 text">
                    @error('button_text_two')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-2 block text-sm font-semibold text-slate-700">Button Two Link</label>
                    <input type="text" name="button_link_two"
                        value="{{ old('button_link_two', $hero->button_link_two) }}"
                        class="w-full rounded-xl border border-slate-300 px-4 py-2.5 outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                        placeholder="https://example.com">
                    @error('button_link_two')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit"
                    class="rounded-xl bg-gradient-to-r from-indigo-600 to-blue-500 px-6 py-2.5 font-semibold text-white shadow-md transition hover:scale-[1.02]">
                    Update Now
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
