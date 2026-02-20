@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
           
            <!-- Page Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="text-dark-emphasis m-0 mb-1">Create Note</h2>
                    <p class="text-muted m-0">Add a new note to your collection</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body p-4">
                    <form>
                        <div class="mb-4">
                            <label for="title" class="form-label">Title</label>
                            <input
                                type="text"
                                id="title"
                                class="form-control"
                                placeholder="Enter a descriptive title"
                                autofocus>
    					</div>

                        <div class="mb-4">
                            <label for="content" class="form-label">Content</label>
                            <textarea
                                id="content"
                                class="form-control"
                                rows="8"
                                placeholder="Write your note content here..."></textarea>
                        </div>

					    <div class="d-flex gap-2">
						    <button class="btn btn-info" type="submit">
							    Create Note
						    </button>
					    </div>
				    </form>
			    </div>
		    </div>
	    </div>
    </div>
</div>
@endsection