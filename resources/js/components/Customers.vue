<template>
  <div class="py-8">
    <h2 class="text-2xl text-gray-800">Customers</h2>
    <div class="p-4 rounded shadow bg-white mt-3">
      <table>
        <thead>
          <tr></tr>
        </thead>
        <tbody>
          <tr v-for="customer in customers" :key="customer.id">
            <td>{{ customer.name }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Customers',

  data() {
    return {
      customers: [],
    }
  },

  created() {
    this.getCustomers()
  },

  methods: {
    async getCustomers() {
      var response = await window.axios.get('/api/customers')
      this.customers = response.data
    }
  }
}
</script>