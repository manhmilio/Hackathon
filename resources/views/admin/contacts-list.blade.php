@extends('admin.layouts.master')

@section('css')
    <!-- select2 css -->
    <link href="{{ URL::asset('build/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{ URL::asset('build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Contacts
        @endslot
        @slot('title')
            Users List
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <form action="{{ route('find_users') }}" method="GET">
                                    <div class="position-relative">
                                        <input name="keyword" type="text" class="form-control" id="searchTableList"
                                            placeholder="Search...">
                                        <i class="bx bx-search-alt search-icon"></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#newContactModal"
                                    class="btn btn-success btn-rounded waves-effect waves-light addContact-modal mb-2"><i
                                        class="mdi mdi-plus me-1"></i> New Contact</button>
                                <a href="{{ route('statistics') }}" class="btn btn-info mb-2">Thống Kê</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-hover dt-responsive nowrap w-100" id="userList-table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 40px;">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/' . ($user->Avatar ?? 'build/images/users/avatar-1.jpg')) }}" alt="Avatar" class="rounded-circle" style="height: 40px;">
                                        </td>
                                        <td>{{ $user->UserName ?? 'N/A' }}</td>
                                        <td>{{ $user->Email }}</td>
                                        <td>{{ $user->PhoneNumber ?? 'N/A' }}</td>
                                        <td>{{ $user->Address ?? 'N/A' }}</td>
                                        <td>{{ $user->dob ? \Carbon\Carbon::parse($user->dob)->format('d-m-Y') : 'N/A' }}</td>
                                        <td>{{ $user->Gender ?? 'N/A' }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal{{ $user->UserID }}">
                                                <i class='bx bxs-edit'></i> Edit
                                            </button>
                                            <form action="{{ route('delete_user', $user->UserID) }}" method="POST" onsubmit="return confirmDelete();" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class='bx bxs-trash'></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <div class="modal fade update-profile" id="editProfileModal{{ $user->UserID }}"
                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Edit Profile</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('update_user', $user->UserID) }}"
                                                        class="form-horizontal" method="POST" enctype="multipart/form-data"
                                                        id="update-profile">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" value="{{ $user->UserID }}" id="data_id">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Email</label>
                                                            <input type="email"
                                                                class="form-control @error('Email') is-invalid @enderror"
                                                                id="useremail" value="{{ $user->Email }}" name="Email"
                                                                placeholder="Enter email" autofocus>
                                                            @error('Email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="username" class="form-label">Username</label>
                                                            <input type="text"
                                                                class="form-control @error('UserName') is-invalid @enderror"
                                                                value="{{ $user->UserName }}" id="username"
                                                                name="UserName" placeholder="Enter username">
                                                            @error('UserName')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="phonenumber" class="form-label">Phone</label>
                                                            <input type="text"
                                                                class="form-control @error('PhoneNumber') is-invalid @enderror"
                                                                value="{{ $user->PhoneNumber }}" id="phonenumber"
                                                                name="PhoneNumber" placeholder="Enter phone">
                                                            @error('PhoneNumber')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="address" class="form-label">Address</label>
                                                            <input type="text"
                                                                class="form-control @error('Address') is-invalid @enderror"
                                                                value="{{ $user->Address }}" id="address"
                                                                name="Address" placeholder="Enter address">
                                                            @error('Address')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="userdob">Date of Birth</label>
                                                            <div class="input-group" id="datepicker1">
                                                                <input type="date"
                                                                    class="form-control @error('dob') is-invalid @enderror"
                                                                    placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy"
                                                                    data-date-container='#datepicker1'
                                                                    data-date-end-date="0d"
                                                                    value="{{ $user->dob ? \Carbon\Carbon::parse($user->dob)->format('d-m-Y') : '' }}"
                                                                    data-provide="datepicker" name="dob" id="dob">
                                                                <span class="input-group-text"><i
                                                                        class="mdi mdi-calendar"></i></span>
                                                            </div>
                                                            @error('dob')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="gender-input" class="form-label">Gender</label>
                                                            <select name="Gender" id="gender-input"
                                                                class="form-control @error('Gender') is-invalid @enderror" style="height: 50px;">
                                                                <option value="Male" {{ $user->Gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                                <option value="Female" {{ $user->Gender == 'Female' ? 'selected' : '' }}>Female</option>
                                                            </select>
                                                            @error('Gender')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="avatar">Profile Picture</label>
                                                            <div class="input-group">
                                                                <input type="file" class="form-control @error('Avatar') is-invalid @enderror"
                                                                    id="avatar" name="Avatar" accept="image/png, image/gif, image/jpeg">
                                                                <label class="input-group-text"
                                                                    for="avatar">Upload</label>
                                                            </div>
                                                            <div class="text-start mt-2">
                                                                <img src="{{ asset('storage/' . ($user->Avatar ?? 'build/images/users/avatar-1.jpg')) }}"
                                                                    alt="" class="rounded-circle avatar-lg">
                                                            </div>
                                                            @error('Avatar')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="mt-3 d-grid">
                                                            <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light UpdateProfile"
                                                                data-id="{{ $user->id }}">Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade " id="newContactModal" tabindex="-1" aria-labelledby="newContactModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newContactModalLabel">Add Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('create_user') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden" class="form-control" id="userid-input">
                                <div class="text-center mb-4">
                                    <div class="position-relative d-inline-block">
                                        <div class="position-absolute bottom-0 end-0">
                                            <label for="member-image-input" class="mb-0" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Select Member Image">
                                                <div class="avatar-xs">
                                                    <div
                                                        class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                        <i class="bx bxs-image-alt"></i>
                                                    </div>
                                                </div>
                                            </label>
                                            <input class="form-control d-none" name="Avatar" value="" id="member-image-input"
                                                type="file" accept="image/png, image/gif, image/jpeg">
                                        </div>
                                        <div class="avatar-lg">
                                            <div class="avatar-title bg-light rounded-circle">
                                                <img src="{{ URL::asset('build/images/users/user-dummy-img.jpg') }}"
                                                    id="member-img" class="avatar-md rounded-circle h-auto" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="username-input" class="form-label">User Name</label>
                                    <input type="text" name="UserName" id="username-input"
                                        class="form-control @error('UserName') is-invalid @enderror"
                                        placeholder="Enter name" value="{{ old('UserName') }}" required>
                                    @error('UserName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email-input" class="form-label">Email</label>
                                    <input type="email" name="Email" id="email-input"
                                        class="form-control @error('Email') is-invalid @enderror"
                                        placeholder="Enter email" value="{{ old('Email') }}" required>
                                    @error('Email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="phone-input" class="form-label">Phone</label>
                                    <input type="text" name="PhoneNumber" id="phone-input"
                                        class="form-control @error('PhoneNumber') is-invalid @enderror"
                                        placeholder="Enter phone" value="{{ old('PhoneNumber') }}">
                                    @error('PhoneNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address-input" class="form-label">Address</label>
                                    <input type="text" name="Address" id="address-input"
                                        class="form-control @error('Address') is-invalid @enderror"
                                        placeholder="Enter address" value="{{ old('Address') }}">
                                    @error('Address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="dob-input" class="form-label">Date of Birth</label>
                                    <input type="date" name="dob" id="dob-input"
                                        class="form-control @error('dob') is-invalid @enderror"
                                        placeholder="Enter date of birth" value="{{ old('dob') }}">
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password-input" class="form-label">Password</label>
                                    <input type="password" name="Password" id="password-input"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Enter password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="gender-input" class="form-label">Gender</label>
                                    <select name="Gender" id="gender-input"
                                        class="form-control @error('Gender') is-invalid @enderror" style="height: 50px;">
                                        <option value="Male" {{ old('Gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ old('Gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                    @error('Gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" id="addContact-btn" class="btn btn-success">Add
                                        Customer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('build/libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/contact-user-list.init.js') }}"></script>

    <script>
        function confirmDelete() {
            return confirm('Bạn có chắc chắn muốn xóa người dùng này!');
        }
    </script>
@endsection