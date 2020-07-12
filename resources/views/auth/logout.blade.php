{{ session()->flush() }}
<script>
    setTimeout(() => {
        window.location = "{{route('login')}}"
    }, 3000)
</script>
logout, mengalihkan...
