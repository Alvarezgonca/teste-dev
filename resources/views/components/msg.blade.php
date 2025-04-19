@if (session('success'))
    <div class="container mt-3">
        <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="container mt-3">
        <div id="error-alert" class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    </div>
@endif

<script>
    setTimeout(() => {
        const successAlert = document.getElementById('success-alert');
        if (successAlert) {
            const alert = bootstrap.Alert.getOrCreateInstance(successAlert);
            alert.close();
        }
    }, 3000);

    setTimeout(() => {
        const errorAlert = document.getElementById('error-alert');
        if (errorAlert) {
            const alert = bootstrap.Alert.getOrCreateInstance(errorAlert);
            alert.close();
        }
    }, 3000);
</script>
