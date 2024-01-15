<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?= isset($blog) ? "Edit Blog" : 'New Blog' ?>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="<?= isset($blog) ? route('blog.update', $blog) : route('blog.store') ?>" method="POST">
                @csrf
                <?= isset($blog) ? method_field('PATCH') : '' ?>
                <input type="text" placeholder="Title" name="title" style="
                                                                    background-color:rgb(31 41 55);
                                                                    padding: 1.5rem;
                                                                    border-radius: .5rem;
                                                                    width: 100%;
                                                                    border: none;
                                                                    font-size: 2rem;
                                                                    color: rgb(229 231 235);
                                                                    margin-bottom: .5rem;" value="<?= isset($blog) ? $blog->title : '' ?>">

                <input type="text" placeholder="Body" name="body" style="
                                                                    background-color:rgb(31 41 55);
                                                                    padding: 1.5rem;
                                                                    border-radius: .5rem;
                                                                    width: 100%;
                                                                    border: none;
                                                                    font-size: 1rem;
                                                                    color: rgb(229 231 235);
                                                                    margin-bottom: .5rem;" value="<?= isset($blog) ? $blog->body : '' ?>">

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <button type="submit" style="
                                        background-color:rgb(31 41 55);
                                        padding: 1.5rem;
                                        border-radius: .5rem;
                                        width: 100%;
                                        border: none;
                                        font-size: 1rem;
                                        color: rgb(229 231 235);">
                    Publish
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
