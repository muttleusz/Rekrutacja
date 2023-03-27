<!-- Formularz dodawania/edycji klienta -->
<template>
  <form @submit.prevent="save">
    <div>
      <label>Imię:</label>
      <input type="text" v-model="client.firstName" required>
      <span v-if="$v.client.firstName.$error">Podaj imię</span>
    </div>
    <div>
      <label>Nazwisko:</label>
      <input type="text" v-model="client.lastName" required>
      <span v-if="$v.client.lastName.$error">Podaj nazwisko</span>
    </div>
    <div>
      <label>Email:</label>
      <input type="email" v-model="client.email" required>
      <span v-if="$v.client.email.$error">Podaj poprawny email</span>
    </div>
    <div>
      <label>Telefon:</label>
      <input type="text" v-model="client.phone" required>
      <span v-if="$v.client.phone.$error">Podaj telefon</span>
    </div>
    <div>
      <button type="submit">{{ isEdit ? 'Edytuj' : 'Dodaj' }}</button>
      <button type="button" @click="cancel">Anuluj</button>
    </div>
  </form>
</template>

<script>
import { required, email } from 'vuelidate/lib/validators'

export default {
  props: ['clientData'],
  data () {
    return {
      client: {
        firstName: '',
        lastName: '',
        email: '',
        phone: ''
      }
    }
  },
  mounted () {
    if (this.clientData) {
      this.client = { ...this.clientData }
    }
  },
  computed: {
    isEdit () {
      return !!this.clientData
    }
  },
  methods: {
    save () {
      if (!this.$v.$invalid) {
        this.$emit('save', this.client)
      }
    },
    cancel () {
      this.$emit('cancel')
    }
  },
  validations: {
    client: {
      firstName: {
        required
      },
      lastName: {
        required
      },
      email: {
        required,
        email
      },
      phone: {
        required
      }
    }
  }
}
</script>
