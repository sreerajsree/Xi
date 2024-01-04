const fromWhite = Vue.createApp({
  data(){
    return {
      searchInput: "",
      inputText: "",
      textAreaContent: "",
      selected: "Search",
      options: [
        { text: 'Dongola Airport', value: "Sudan (DOG)"},
        { text: 'Garowe International Airport', value: "Garowe (GGR)"},
        { text: 'Useless Loop Airport Australia', value: "Useless Loop (USL)"},
        { text: 'Bandara Torea Airport Fakfak', value: "Fakfak (FKQ)"},
        { text: 'Aden Adde International Airport', value: "Mogadishu (MGQ)"},
        { text: 'Moron Airport Spain', value: "Morón (OZP)"},
        { text: 'Perm International Airport', value: "Perm Krai (PEE)"},
        { text: 'Mafia Airport', value: "Mafia Island (MFA)"},
        { text: 'Batman Airport', value: "Batman (BAL)"},
        { text: 'Gran Canaria Airport', value: "Las Palmas (LPA)"},
      ],
      checkedOptions:[],
      radioButtonPicked: ""
    }
  }
})
fromWhite.mount("#fromWhite")

const toWhite = Vue.createApp({
  data(){
    return {
      searchInput: "",
      inputText: "",
      textAreaContent: "",
      selected: "Search",
      options: [
        { text: 'Dongola Airport', value: "Sudan (DOG)"},
        { text: 'Garowe International Airport', value: "Garowe (GGR)"},
        { text: 'Useless Loop Airport Australia', value: "Useless Loop (USL)"},
        { text: 'Bandara Torea Airport Fakfak', value: "Fakfak (FKQ)"},
        { text: 'Aden Adde International Airport', value: "Mogadishu (MGQ)"},
        { text: 'Moron Airport Spain', value: "Morón (OZP)"},
        { text: 'Perm International Airport', value: "Perm Krai (PEE)"},
        { text: 'Mafia Airport', value: "Mafia Island (MFA)"},
        { text: 'Batman Airport', value: "Batman (BAL)"},
        { text: 'Gran Canaria Airport', value: "Las Palmas (LPA)"},
      ],
      checkedOptions:[],
      radioButtonPicked: ""
    }
  }
})
toWhite.mount("#toWhite")

const fromModal = Vue.createApp({
  data(){
    return {
      searchInput: "",
      inputText: "",
      textAreaContent: "",
      selected: "Search",
      options: [
        { text: 'Dongola Airport', value: "Sudan (DOG)"},
        { text: 'Garowe International Airport', value: "Garowe (GGR)"},
        { text: 'Useless Loop Airport Australia', value: "Useless Loop (USL)"},
        { text: 'Bandara Torea Airport Fakfak', value: "Fakfak (FKQ)"},
        { text: 'Aden Adde International Airport', value: "Mogadishu (MGQ)"},
        { text: 'Moron Airport Spain', value: "Morón (OZP)"},
        { text: 'Perm International Airport', value: "Perm Krai (PEE)"},
        { text: 'Mafia Airport', value: "Mafia Island (MFA)"},
        { text: 'Batman Airport', value: "Batman (BAL)"},
        { text: 'Gran Canaria Airport', value: "Las Palmas (LPA)"},
      ],
      checkedOptions:[],
      radioButtonPicked: ""
    }
  }
})
fromModal.mount("#fromModal")

const toModal = Vue.createApp({
  data(){
    return {
      searchInput: "",
      inputText: "",
      textAreaContent: "",
      selected: "Search",
      options: [
        { text: 'Dongola Airport', value: "Sudan (DOG)"},
        { text: 'Garowe International Airport', value: "Garowe (GGR)"},
        { text: 'Useless Loop Airport Australia', value: "Useless Loop (USL)"},
        { text: 'Bandara Torea Airport Fakfak', value: "Fakfak (FKQ)"},
        { text: 'Aden Adde International Airport', value: "Mogadishu (MGQ)"},
        { text: 'Moron Airport Spain', value: "Morón (OZP)"},
        { text: 'Perm International Airport', value: "Perm Krai (PEE)"},
        { text: 'Mafia Airport', value: "Mafia Island (MFA)"},
        { text: 'Batman Airport', value: "Batman (BAL)"},
        { text: 'Gran Canaria Airport', value: "Las Palmas (LPA)"},
      ],
      checkedOptions:[],
      radioButtonPicked: ""
    }
  }
})
toModal.mount("#toModal")

const editFromModal = Vue.createApp({
  data(){
    return {
      searchInput: "",
      inputText: "",
      textAreaContent: "",
      selected: "Search",
      options: [
        { text: 'Dongola Airport', value: "Sudan (DOG)"},
        { text: 'Garowe International Airport', value: "Garowe (GGR)"},
        { text: 'Useless Loop Airport Australia', value: "Useless Loop (USL)"},
        { text: 'Bandara Torea Airport Fakfak', value: "Fakfak (FKQ)"},
        { text: 'Aden Adde International Airport', value: "Mogadishu (MGQ)"},
        { text: 'Moron Airport Spain', value: "Morón (OZP)"},
        { text: 'Perm International Airport', value: "Perm Krai (PEE)"},
        { text: 'Mafia Airport', value: "Mafia Island (MFA)"},
        { text: 'Batman Airport', value: "Batman (BAL)"},
        { text: 'Gran Canaria Airport', value: "Las Palmas (LPA)"},
      ],
      checkedOptions:[],
      radioButtonPicked: ""
    }
  }
})
editFromModal.mount("#editFromModal")