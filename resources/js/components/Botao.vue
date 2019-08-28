<template>
    <div >
          <form action="#" method="post">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" :value="token">
            <button onclick="alert('ola mundo');" class="btn btn-success col-lg-12">botão</button>
          </form>
    </div>
</template>

<script>
    export default {
      props:['click']

    }
</script>
