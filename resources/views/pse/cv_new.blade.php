@extends('layouts.app')
@section('content')
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Form Call Visit</li>
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

    <form action="{{ route('callvisits.store') }}" method="POST">
        @csrf
        <div class="card offset-3 col-6">
            <div class="card-body">
                <button type="button" class="btn btn-primary">Create New Visit</button>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Visit Date</label>
                            <input wire:model="visitdate" type="date" name="visitdate" placehoder="dd-mm-yyyy" required pattern="(?:30))|(?:(?:0[13578]|1[02])-31))/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])" class="form-control">
                            <div>
                                @error('visitdate')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Next Visit</label>
                            <input wire:model="nextvisit" type="date" name="nextvisit" class="form-control">
                            <div>
                                @error('nextvisit')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Customer</label>
                            <input id="customer" type="text" name="customer" class="form-control">
                            {{-- <div id="customerList"></div> --}}
                            {{-- https://tutsmake.com/laravel-jquery-ui-autocomplete-ajax-search-example/ --}}
                            <div>
                                @error('customer')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Qty</label>
                            <input wire:model="qty" type="number" name="qty" class="form-control">
                            <div>
                                @error('qty')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Location</label>
                            <input wire:model="location" type="text" name="location" class="form-control">
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
                            <input wire:model="topic" type="text" name="topic" class="form-control" placeholder="Visit Topic">
                            <div>
                                @error('topic')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Topic</label>
                            <input wire:model="nexttopic" type="text" name="nexttopic" class="form-control" placeholder="Next Visit Topic">
                            <div>
                                @error('nexttopic')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">PIC</label>
                            <input wire:model="pic" type="text" name="pic" class="form-control">
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
                            <input wire:model="phone" type="number" name="phone" class="form-control">
                            <div>
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Remark</label>
                        <input wire:model="remark" type="text" name="remark" style="height: 70px" class="form-control">
                        <div>
                            @error('remark')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <Br>
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
