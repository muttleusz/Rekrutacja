<template>
  <div>
    <h2>Klienci</h2>
    <table>
      <thead>
        <tr>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Telefon</th>
          <th>E-mail</th>
          <th>Akcje</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(customer, index) in customers" :key="index">
          <td>{{ customer.firstName }}</td>
          <td>{{ customer.lastName }}</td>
          <td>{{ customer.phone }}</td>
          <td>{{ customer.email }}</td>
          <td>
            <button @click="viewCustomer(index)">Pokaż</button>
          </td>
        </tr>
      </tbody>
    </table>
    <div v-if="selectedCustomer">
      <h2>Wybrany klient</h2>
      <p>Imię: {{ selectedCustomer.firstName }}</p>
      <p>Nazwisko: {{ selectedCustomer.lastName }}</p>
      <p>Telefon: {{ selectedCustomer.phone }}</p>
      <p>E-mail: {{ selectedCustomer.email }}</p>
      <p>Pracownik: {{ selectedCustomer.employee }}</p>
      <p>Ostatnio kupione rzeczy: {{ selectedCustomer.lastPurchases }}</p>
      <p>Łącznie wydał na zakupy: {{ selectedCustomer.totalSpent }}</p>
      <p>Samochód: {{ selectedCustomer.car }}</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      customers: [
        {
          firstName: "Jan",
          lastName: "Kowalski",
          phone: "123456789",
          email: "jan.kowalski@example.com",
          employee: "Adam Nowak",
          lastPurchases: ["buty", "koszula"],
          totalSpent: 250,
          car: "Audi A4",
        },
        {
          firstName: "Anna",
          lastName: "Nowak",
          phone: "987654321",
          email: "anna.nowak@example.com",
          employee: "Maria Kowalska",
          lastPurchases: ["sukienka", "spódnica"],
          totalSpent: 450,
          car: "BMW X5",
        },
      ],
      selectedCustomer: null,
    };
  },
  methods: {
    viewCustomer(index) {
      this.selectedCustomer = this.customers[index];
    },
  },
};
</script>
