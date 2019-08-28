<template>
    <div >
          <table class="table table-default">
            <thead class="table table-primary">
              <tr>
                <th scope="col" v-for="titulo in titulos">{{titulo}}</th>
                <th>Link</th>
              </tr>
            </thead>
              <tbody>
                <tr v-for="item in items">
                  <td v-for="i in item">{{i}}</td>
                  <td v-if="editar">
                      <a v-if="editar" v-bind:href="editar">Editar</a>
                  </td>
                </tr>
              </tbody>
            </table>
    </div>
</template>

<script>
    export default {
      props:['click','titulos','items','editar']

    }
</script>
