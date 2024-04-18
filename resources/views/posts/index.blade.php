<style>
    /* Add this to your CSS file or <style> tags in your HTML */
    .post-card {
        border: 2px solid black;
        width: 300px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .post-id {
        margin-top: 0;
    }

    .post-title {
        font-size: 20px;
        margin-top: 10px;
    }

    .post-content {
        margin-top: 10px;
    }

    .post-actions {
        margin-top: 20px;
    }

    .edit-button,
    .delete-button {
        padding: 8px 12px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .edit-button:hover,
    .delete-button:hover {
        background-color: #0056b3;
    }

    .delete-form {
        display: inline-block;
        margin-left: 10px;
    }
</style>

<!-- posts/index.blade.php -->

@foreach ($posts as $post)
    <div class="post-card">
        <h1 class="post-id">Post ID: {{ $post->id }}</h1>
        <h2 class="post-title">Title: {{ $post->title }}</h2>
        <p class="post-content">{{ $post->content }}</p>


        <div class="post-actions">
            @can('update', $post)
                <a href="{{ route('post.edit', $post) }}" class="edit-button">Edit</a>
            @endcan
            @can('delete', $post)
                <form action="{{ route('post.destroy', $post) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Delete</button>
                </form>
            @endcan
        </div>
    </div>
@endforeach
