<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile - D'Delfar</title>
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>

<!-- Modern Alert -->
<div id="alertContainer" class="alert-modern" style="display: none;">
    <span id="alertMessage"></span>
    <button id="alertClose">OK</button>
</div>

@php
    $user = auth()->user();
@endphp

<div class="profile-page">

    <div class="profile-card">

        <!-- Button Back -->
        <div class="back-button-wrapper">
            <a href="{{ route('landing') }}" class="btn btn-back">← Back</a>
        </div>

        <!-- Role Badge -->
        <span class="role-badge">{{ $user->role === 'user' ? 'Customer' : ucfirst($user->role) }}</span>

        <!-- Profile Picture -->
        <div class="profile-picture-wrapper">
            <img 
                src="{{ $user->foto ? asset('storage/' . $user->foto) : '/images/default-profile.png' }}"
                class="profile-picture"
                id="profileImagePreview"
            >
        </div>

        <!-- Display Info -->
        <div class="profile-info" id="displayInfo">
            <h2 class="profile-name">{{ $user->name }}</h2>
            <p class="profile-email">{{ $user->email }}</p>
            @if($user->role !== 'user')
                <p class="profile-nokaryawan">Nomor Karyawan: {{ $user->nomor_karyawan }}</p>
            @endif

            <div class="profile-buttons">
                <button type="button" class="btn btn-edit-profile" id="btnEditProfile">Edit Profile</button>
                @if($user->role !== 'user')
                    <a href="{{ url('/admin') }}" class="btn btn-admin-panel">Masuk Admin</a>
                @endif
            </div>
        </div>

        <!-- Edit Form -->
        <form id="editForm" class="edit-form" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-inner">
                <label>Profile Picture</label>
                <input type="file" name="foto" id="profileImage" accept="image/*">

                <label>Full Name</label>
                <input type="text" name="name" value="{{ $user->name }}" required>

                <label>Email</label>
                <input type="email" name="email" value="{{ $user->email }}" required>

                @if($user->role !== 'user')
                    <label>Nomor Karyawan</label>
                    <input type="text" name="nomor_karyawan" value="{{ $user->nomor_karyawan }}">
                @endif

                <div class="profile-buttons">
                    <button type="submit" class="btn btn-save">Simpan</button>
                    <button type="button" class="btn btn-cancel" id="btnCancel">Batal</button>
                </div>
            </div>
        </form>

    </div>
</div>

<script>
    // Modern Alert
    function showAlert(message) {
        const alertContainer = document.getElementById('alertContainer');
        const alertMessage = document.getElementById('alertMessage');
        const alertClose = document.getElementById('alertClose');

        alertMessage.textContent = message;
        alertContainer.style.display = 'flex';
        setTimeout(() => alertContainer.classList.add('show'), 50);

        alertClose.onclick = () => {
            alertContainer.classList.remove('show');
            setTimeout(() => alertContainer.style.display = 'none', 400);
        };

        setTimeout(() => {
            alertContainer.classList.remove('show');
            setTimeout(() => alertContainer.style.display = 'none', 400);
        }, 3000);
    }

    @if(session('success'))
        document.addEventListener('DOMContentLoaded', () => {
            showAlert("{{ session('success') }}");
        });
    @endif

    // Toggle Edit Form
    const btnEdit = document.getElementById('btnEditProfile');
    const btnCancel = document.getElementById('btnCancel');
    const displayInfo = document.getElementById('displayInfo');
    const editForm = document.getElementById('editForm');
    const profileImageInput = document.getElementById('profileImage');
    const profileImagePreview = document.getElementById('profileImagePreview');

    btnEdit.addEventListener('click', () => {
        displayInfo.style.display = 'none';
        editForm.style.display = 'block';
        editForm.classList.add('animate-open');
    });

    btnCancel.addEventListener('click', () => {
        editForm.classList.remove('animate-open');
        editForm.style.display = 'none';
        displayInfo.style.display = 'block';
    });

    profileImageInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if(file) {
            profileImagePreview.src = URL.createObjectURL(file);
        }
    });
</script>
</body>
</html>