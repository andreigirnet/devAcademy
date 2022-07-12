<template>
    <div>
    <div class="modal-wrapper">
    </div>
    <div class="modal-content-container">
        <button v-on:click="$emit('hideModal')">Click me</button>
    </div>
    </div>
</template>
<script>

</script>
<style>
    .modal-wrapper{
        position: fixed;
        z-index: 2;
        width: 100%;
        height: 100vh;
        background: black;
        opacity: 0.6;
    }
    .modal-content-container{
        width: 80%;
        height: 600px;
        background: white;
        opacity: 1;
        position: fixed;
        z-index: 4;
        top: 50%;  /* position the top  edge of the element at the middle of the parent */
        left: 50%; /* position the left edge of the element at the middle of the parent */

        transform: translate(-50%, -50%);
    }
</style>
