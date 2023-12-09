@extends('dashboard._layouts._app')

@section('content')
    <!-- Striped rows start -->
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">All ads</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body ">

                        <a href="{{ route('dashboard.ads.create') }}" class="btn btn-icon btn-info mr-1">Create <i
                                class="fa fa-plus" style="position: relative"></i></a>

                    </div>
                    <form action="" class="row">
                        <div class="form-group col-md-4 ml-2">
                            <input type="text" class="form-control" name="search" id="search" autofocus
                                value="{{ request()->search }}" aria-describedby="helpId" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-primary col-md-2" style="  height: 40px;margin: auto 25px;"><i
                                class="fa fa-search" style="position: relative;" aria-hidden="true"></i>
                            Search</button>



                    </form>

                    @if ($ads->count() == 0)
                        <div class="table-responsive">
                            <h3 class="mr-3 mb-3" ">no data found</h3>
                        </div>
@else
    <div class="table-responsive">
                            <table class="table table-striped table-scrollable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">AdSlot</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($ads as $index=> $ad)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td dir="rtl">{{ $ad->title }}</td>
                                    <td dir="rtl">{{ $ad->user->name }}</td>
                                    <td dir="rtl">{{ $ad->category->name }}</td>
                                    <td dir="rtl">{{ $ad->ad_slot->name }}</td>
                                    <td dir="rtl">{{ $ad->status }}</td>
                                    <td class="form-group"
                                        style="  display: flex;
                                        word-wrap: inherit;border: none;">
                                        <a href="{{ route('dashboard.ads.show', $ad->id) }}" type="button"
                                            class="btn btn-icon btn-success mr-1" style="  min-width: 100px;">Show <i
                                                class="fa fa-explore" style="position: relative;"></i></a>

                                        <a href="{{ route('dashboard.ads.edit', $ad->id) }}" type="button"
                                            class="btn btn-icon btn-warning mr-1" style="  min-width: 100px;">Edit <i
                                                class="fa fa-edit" style="position: relative;"></i></a>

                                        <form action="{{ route('dashboard.ads.destroy', $ad->id) }}" method="POST"
                                            style="display: inline-block">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-icon btn-danger mr-1 delete"
                                                style="  min-width: 102px;">Delete <i class="fa fa-trash"
                                                    style="position: relative;"></i></button>
                                        </form>

                                    </td>
                                </tr>
                    @endforeach

                    </tbody>
                    </table>
                </div>
                <div class="text-center m-auto">{{ $ads->appends(request()->query())->links() }}
                </div>
                @endif


            </div>
        </div>
    </div>
    </div>
    <!-- Striped rows end -->
@endsection
