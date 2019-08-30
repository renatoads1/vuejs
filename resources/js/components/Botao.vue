<template>
    <div >
          <form action="javascript:void(0)" method="post">
            <input type="hidden" name="_method" value="POST">
            <!-- <input type="hidden" name="_token" :value="token"> -->
            <button v-on:click="executaform()" class="btn btn-success col-lg-12">botão</button>
          </form>
          <hr>
          <div class="col-lg-12">
            <span v-if="buscar"  class="span span-primary col-lg-12">{{buscar}}</span>
          <input type="search" class="form form-control col-lg-10" v-model="buscar" value="">
          <span v-if="buscar"  class="btn btn-primary col-lg-1">Send</span>
        </div>
    </div>
</template>

<script>
    export default {
      data:function(){
        return{
          buscar:''
        }
      },
      methods:{
        executaform:function(){
              axios.get('http://localhost/lol').then((r) => {
                    console.log("ajax rodou");
              });

        }
      }

    }
</script>
