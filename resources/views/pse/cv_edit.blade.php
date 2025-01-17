@extends('layouts.app')
@section('content')
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Update Call Visit</li>
    </ul>
    <div class="container-fluid">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('callvisits.update',$callvisit->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card offset-3 col-6">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Visit Date</label>
                                <input type="date" name="visitdate" id="visitdate" value="{{ $callvisit->visitdate }}" required class="form-control">
                                <div>
                                    @error('visitdate')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Next Visit</label>
                                <input id="nextvisit" type="date" name="nextvisit" value="{{ $callvisit->nextvisit }}" class="form-control" required>
                                <div>
                                    @error('nextvisit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Customer</label>
                                <input id="customer" type="text" name="customer" value="{{ $callvisit->customer }}" class="form-control">                                
                                <div>
                                    @error('customer')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Qty</label>
                                <input id="qty" type="number" name="qty" value="{{ $callvisit->qty }}" class="form-control">
                                <div>
                                    @error('qty')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input id="location" type="text" name="location" value="{{ $callvisit->location }}" class="form-control">
                                <div>
                                    @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Topic</label>
                                <input id="topic" type="text" name="topic" class="form-control" value="{{ $callvisit->topic }}" placeholder="Visit Topic">
                                <div>
                                    @error('topic')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Topic</label>
                                <input id="nexttopic" type="text" name="nexttopic" value="{{ $callvisit->nexttopic }}" class="form-control"
                                    placeholder="Next Visit Topic">
                                <div>
                                    @error('nexttopic')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">PIC</label>
                                <input id="pic" type="text" name="pic" class="form-control" value="{{ $callvisit->pic }}">
                                <div>
                                    @error('pic')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Type</label>
                                <select id="type" name="type" class="form-control">
                                    <option value="phone">Phone</option>
                                    <option value="email">Email</option>
                                    <option value="visit_site">Visit Site</option>
                                    <option value="visit_office">Visit Office</option>
                                    <option value="on_leave">Cuti/Libur</option>
                                    <option value="not_active">Not Active</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input id="phone" type="number" name="phone" value="{{ $callvisit->phone }}" class="form-control">
                                <div>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Remark</label>
                            <input id="remark" type="text" name="remark" value="{{ $callvisit->remark }}" style="height: 70px"
                                class="form-control">
                            <div>
                                @error('remark')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
