@extends('admin.layout.masterAdmin')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Theme and Topic</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Theme and Topic</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">

                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#createTheme" style="margin-top: 20px; float:right;">
                            Add New Theme
                        </button>
                        <h5 class="card-title">Theme</h5>
                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Theme</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                @foreach($themes as $tema)
                                <?php $no++; ?>
                                <tr>
                                    <th scope="row">{{$no}}</th>
                                    <td>{{$tema->theme}}</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-xs" data-bs-toggle="modal" data-bs-target="#editModalTheme{{$tema->id}}">Edit</a>
                                        <form action="{{ route('theme.destroy', $tema->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this topic?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#createTopic" style="margin-top: 20px; float:right;">
                            Add New Topic
                        </button>
                        <h5 class="card-title">Topic</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Theme</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                @foreach($themes as $theme)
                                @foreach($theme->topics as $topic)
                                <?php $no++; ?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$topic->topic}}</td>
                                    <td>{{$theme->theme}}</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-xs" data-bs-toggle="modal" data-bs-target="#editModalTopic{{$topic->id}}">Edit</a>
                                        <form action="{{ route('topic.destroy', $tema->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this topic?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="modal fade" id="createTheme" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New Theme</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('theme.store') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Create form content goes here -->
                        <div class="mb-3">
                            <label for="theme" class="form-label">Theme</label>
                            <input type="text" class="form-control" id="theme" name="theme">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    @foreach($themes as $tema)
    <div class="modal fade" id="editModalTheme{{$tema->id}}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Theme</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Edit form content goes here -->
                    <form action="{{ route('theme.update', $tema->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="edit_theme" class="form-label">Theme</label>
                            <input type="text" class="form-control" id="edit_theme" name="edit_theme" value="{{$tema->theme}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- End Default Table Example -->

    @if (session('create_success'))
    <div class="modal fade" id="createSuccessModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-check2-circle text-success" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                        </svg>

                        <p class="mt-3">{{ session('create_success') }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var createSuccessModal = new bootstrap.Modal(document.getElementById('createSuccessModal'));
            createSuccessModal.show();
        });
    </script>
    @endif

    @if (session('edit_success'))
    <div class="modal fade" id="updateSuccessModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Updated Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-check2-circle text-success" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                        </svg>

                        <p class="mt-3">{{ session('edit_success') }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var createSuccessModal = new bootstrap.Modal(document.getElementById('updateSuccessModal'));
            createSuccessModal.show();
        });
    </script>
    @endif

    @if (session('delete_success'))
    <div class="modal fade" id="deleteSuccessModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deleted Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-check2-circle text-success" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                        </svg>

                        <p class="mt-3">{{ session('delete_success') }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var createSuccessModal = new bootstrap.Modal(document.getElementById('deleteSuccessModal'));
            createSuccessModal.show();
        });
    </script>
    @endif








    <div class="modal fade" id="createTopic" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New Topic</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('topic.store') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Create form content goes here -->
                        <div class="mb-3">
                            <label for="theme_id" class="form-label">Theme</label>
                            <select class="form-select" name="theme_id" id="theme_id">
                                @foreach($themes as $theme)
                                <option value="{{$theme->id}}">{{$theme->theme}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="type_course" class="form-label">Course Type</label>
                            <select class="form-select" name="type_course" id="type_course">
                                <option value="Short Course">Short Course</option>
                                <option value="Mid Course">Mid Course</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="topic" class="form-label">Topic</label>
                            <input type="text" class="form-control" id="topic" name="topic">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    @foreach($themes as $tema)
    @foreach($tema->topics as $topic)
    <div class="modal fade" id="editModalTopic{{$topic->id}}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Theme</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Edit form content goes here -->
                    <form action="{{ route('topic.update', $topic->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="theme_id" class="form-label">Theme</label>
                            <select class="form-select" name="theme_id" id="theme_id">
                                @foreach($themes as $theme)
                                <option value="{{$theme->id}}">{{$theme->theme}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="type_course" class="form-label">Course Type</label>
                            <select class="form-select" name="type_course" id="type_course">
                                <option value="Short Course">Short Course</option>
                                <option value="Mid Course">Mid Course</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="topic" class="form-label">Topic</label>
                            <input type="text" class="form-control" id="topic" name="topic" value="{{$topic->topic}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endforeach

    <!-- Edit form content goes here -->


</main><!-- End #main -->

@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var createSuccessAlert = document.getElementById('createSuccessAlert');
        if (createSuccessAlert) {
            new bootstrap.Toast(createSuccessAlert).show();
        }

        var editSuccessAlert = document.getElementById('editSuccessAlert');
        if (editSuccessAlert) {
            new bootstrap.Toast(editSuccessAlert).show();
        }

        var deleteSuccessAlert = document.getElementById('deleteSuccessAlert');
        if (deleteSuccessAlert) {
            new bootstrap.Toast(deleteSuccessAlert).show();
        }
    });
</script>

@endsection