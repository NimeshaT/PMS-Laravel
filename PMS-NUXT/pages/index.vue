<template>
  <div class="container">
    <h1 class="text-center text-success">Product Management System</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Image</th>
          <th scope="col">Price</th>
        </tr>
      </thead>
      <tbody>
        <!-- <tr>
          <th>1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr> -->


      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  name: 'home',
  layout: 'dashboard',
  data() {
    return {
      tasks: [],
    }
  },
  methods: {
    getTasks() {
      this.$axios.get('http://127.0.0.1:8000/api/tasks').then(Response=>{
        console.log(Response);
        // this.tasks=Response.data;
      });
    },
  },
  mounted(){
    this.getTasks();
  },
}
</script>
