<!DOCTYPE html>
<html lang="ept-br">
<link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>

<style>
    @import url('https://fonts.cdnfonts.com/css/anurati');
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: white;
        z-index: 9999;
        display: flex !important;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>
    <div class="overlay" id="overlay">
        <h1 style="font-family: 'Anurati', sans-serif;'">B<span style="font-family: 'Manrope';">yte</span>W<span style="font-family: 'Manrope';">orks</span>
</h1>
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <script>
    $(document).ready(() => {
        const overlay = $("#overlay");
        setTimeout(() => overlay.attr("style", "display: none !important"), 500);
    });
</script>
