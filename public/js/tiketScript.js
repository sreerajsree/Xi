const fromWhite = Vue.createApp({
  data(){
    return {
      searchInput: "",
      inputText: "",
      textAreaContent: "",
      selected: "Search",
      options: [
        { text: 'Halim Perdanakusuma, Jakarta', value: "Jakarta (HLP)"},
        { text: 'Achmad Yani, Semarang', value: "Semarang (SRG)"},
        { text: 'Soekarno-Hatta, Banten', value: "Banten (CGK)"},
        { text: 'Kuala Namu  Deli Serdang, Medan', value: "Sumatera Utara (KNO)"},
        { text: 'Minangkabau International Airport, Padang', value: "Padang (PDG)"},
        { text: 'Raja Haji Fisabilillah,  Tanjungpinang', value: "Tanjungpinang (TNJ)"},
        { text: 'Husein Sastranegara, Bandung', value: "Bandung (BDO)"},
        { text: 'Pyongyang Airport, Pyongyang', value: "Pyongyang (FNJ)"},
        { text: 'Seletar Airport, Singapore', value: "Singapore (XSP)"},
        { text: 'Singapore Changi Airport, Singapore', value: "Singapore (SIN)"},
        { text: 'Kuala Lumpur International Airport, Kuala Lumpur', value: "Kuala Lumpur (KUL)"},
        { text: 'JOG  Adi Sutjipto, Sleman', value: "Sleman (JOG)"},
        { text: 'Kuala Lumpur Sultan Abdul Aziz Shah Airport', value: "Kuala Lumpur (SZB)"},
        { text: 'Tokyo Haneda Japan', value: "Tokyo (HND)"},
        { text: 'Kansai International Japan', value: "Osaka (KIX)"},
        { text: 'Manash International Aiport', value: "Bishkek (FRU)"},
        { text: 'Turkmenbashi International Airport', value: "Turkmenbashi (KRW)"},
        { text: 'Dili Presidente Nicolau Lobato international Airport', value:"Dili (DIL)"},
        { text: 'Shashi Airport', value:"Hubei (SHS)"},
        { text: 'Nakashibetsu Airport', value:"Hokkaido (SHB)"},
        { text: 'Miyako Shimojishima Airport', value:"Okinawa (SHI)"},
        { text: 'Alxa Left Banner Bayanhot Airport', value:"Alxa Left Banner (AXF)"},
        { text: 'Ulanqab Jining Airport China', value: "Ulanqab (UCB)"},
        { text: 'San Pedro Airport Cote D`Ivoire', value: "San Pedro (SPY)"},
        { text: 'Aéroport de La Réunion Roland Garros', value:"Réunion (RUN)"},
        { text: 'Nakhon Ratchasima Airport', value: "Nakhon Ratchasima (NAK)"},
        { text: 'Maré Airport', value: "La Roche (MEE)"},
        { text: 'Île des Pins Airport', value: "Île des Pins (ILP)"},
        { text: 'Anadyr Airport', value: "Chukotka Autonomous Okrug (DYR)"},
        { text: 'New Bight Airport', value: "Cat Island (CAT)"},
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
        { text: 'Halim Perdanakusuma, Jakarta', value: "Jakarta (HLP)"},
        { text: 'Achmad Yani, Semarang', value: "Semarang (SRG)"},
        { text: 'Soekarno-Hatta, Banten', value: "Banten (CGK)"},
        { text: 'Kuala Namu  Deli Serdang, Medan', value: "Sumatera Utara (KNO)"},
        { text: 'Minangkabau International Airport, Padang', value: "Padang (PDG)"},
        { text: 'Raja Haji Fisabilillah,  Tanjungpinang', value: "Tanjungpinang (TNJ)"},
        { text: 'Husein Sastranegara, Bandung', value: "Bandung (BDO)"},
        { text: 'Pyongyang Airport, Pyongyang', value: "Pyongyang (FNJ)"},
        { text: 'Seletar Airport, Singapore', value: "Singapore (XSP)"},
        { text: 'Singapore Changi Airport, Singapore', value: "Singapore (SIN)"},
        { text: 'Kuala Lumpur International Airport, Kuala Lumpur', value: "Kuala Lumpur (KUL)"},
        { text: 'JOG  Adi Sutjipto, Sleman', value: "Sleman (JOG)"},
        { text: 'Kuala Lumpur Sultan Abdul Aziz Shah Airport', value: "Kuala Lumpur (SZB)"},
        { text: 'Tokyo Haneda Japan', value: "Tokyo (HND)"},
        { text: 'Kansai International Japan', value: "Osaka (KIX)"},
        { text: 'Manash International Aiport', value: "Bishkek (FRU)"},
        { text: 'Turkmenbashi International Airport', value: "Turkmenbashi (KRW)"},
        { text: 'Dili Presidente Nicolau Lobato international Airport', value:"Dili (DIL)"},
        { text: 'Shashi Airport', value:"Hubei (SHS)"},
        { text: 'Nakashibetsu Airport', value:"Hokkaido (SHB)"},
        { text: 'Miyako Shimojishima Airport', value:"Okinawa (SHI)"},
        { text: 'Alxa Left Banner Bayanhot Airport', value:"Alxa Left Banner (AXF)"},
        { text: 'Ulanqab Jining Airport China', value: "Ulanqab (UCB)"},
        { text: 'San Pedro Airport Cote D`Ivoire', value: "San Pedro (SPY)"},
        { text: 'Aéroport de La Réunion Roland Garros', value:"Réunion (RUN)"},
        { text: 'Nakhon Ratchasima Airport', value: "Nakhon Ratchasima (NAK)"},
        { text: 'Maré Airport', value: "La Roche (MEE)"},
        { text: 'Île des Pins Airport', value: "Île des Pins (ILP)"},
        { text: 'Anadyr Airport', value: "Chukotka Autonomous Okrug (DYR)"},
        { text: 'New Bight Airport', value: "Cat Island (CAT)"},
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
        { text: 'Halim Perdanakusuma, Jakarta', value: "Jakarta (HLP)"},
        { text: 'Achmad Yani, Semarang', value: "Semarang (SRG)"},
        { text: 'Soekarno-Hatta, Banten', value: "Banten (CGK)"},
        { text: 'Kuala Namu  Deli Serdang, Medan', value: "Sumatera Utara (KNO)"},
        { text: 'Minangkabau International Airport, Padang', value: "Padang (PDG)"},
        { text: 'Raja Haji Fisabilillah,  Tanjungpinang', value: "Tanjungpinang (TNJ)"},
        { text: 'Husein Sastranegara, Bandung', value: "Bandung (BDO)"},
        { text: 'Pyongyang Airport, Pyongyang', value: "Pyongyang (FNJ)"},
        { text: 'Seletar Airport, Singapore', value: "Singapore (XSP)"},
        { text: 'Singapore Changi Airport, Singapore', value: "Singapore (SIN)"},
        { text: 'Kuala Lumpur International Airport, Kuala Lumpur', value: "Kuala Lumpur (KUL)"},
        { text: 'JOG  Adi Sutjipto, Sleman', value: "Sleman (JOG)"},
        { text: 'Kuala Lumpur Sultan Abdul Aziz Shah Airport', value: "Kuala Lumpur (SZB)"},
        { text: 'Tokyo Haneda Japan', value: "Tokyo (HND)"},
        { text: 'Kansai International Japan', value: "Osaka (KIX)"},
        { text: 'Manash International Aiport', value: "Bishkek (FRU)"},
        { text: 'Turkmenbashi International Airport', value: "Turkmenbashi (KRW)"},
        { text: 'Dili Presidente Nicolau Lobato international Airport', value:"Dili (DIL)"},
        { text: 'Shashi Airport', value:"Hubei (SHS)"},
        { text: 'Nakashibetsu Airport', value:"Hokkaido (SHB)"},
        { text: 'Miyako Shimojishima Airport', value:"Okinawa (SHI)"},
        { text: 'Alxa Left Banner Bayanhot Airport', value:"Alxa Left Banner (AXF)"},
        { text: 'Ulanqab Jining Airport China', value: "Ulanqab (UCB)"},
        { text: 'San Pedro Airport Cote D`Ivoire', value: "San Pedro (SPY)"},
        { text: 'Aéroport de La Réunion Roland Garros', value:"Réunion (RUN)"},
        { text: 'Nakhon Ratchasima Airport', value: "Nakhon Ratchasima (NAK)"},
        { text: 'Maré Airport', value: "La Roche (MEE)"},
        { text: 'Île des Pins Airport', value: "Île des Pins (ILP)"},
        { text: 'Anadyr Airport', value: "Chukotka Autonomous Okrug (DYR)"},
        { text: 'New Bight Airport', value: "Cat Island (CAT)"},
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
        { text: 'Halim Perdanakusuma, Jakarta', value: "Jakarta (HLP)"},
        { text: 'Achmad Yani, Semarang', value: "Semarang (SRG)"},
        { text: 'Soekarno-Hatta, Banten', value: "Banten (CGK)"},
        { text: 'Kuala Namu  Deli Serdang, Medan', value: "Sumatera Utara (KNO)"},
        { text: 'Minangkabau International Airport, Padang', value: "Padang (PDG)"},
        { text: 'Raja Haji Fisabilillah,  Tanjungpinang', value: "Tanjungpinang (TNJ)"},
        { text: 'Husein Sastranegara, Bandung', value: "Bandung (BDO)"},
        { text: 'Pyongyang Airport, Pyongyang', value: "Pyongyang (FNJ)"},
        { text: 'Seletar Airport, Singapore', value: "Singapore (XSP)"},
        { text: 'Singapore Changi Airport, Singapore', value: "Singapore (SIN)"},
        { text: 'Kuala Lumpur International Airport, Kuala Lumpur', value: "Kuala Lumpur (KUL)"},
        { text: 'JOG  Adi Sutjipto, Sleman', value: "Sleman (JOG)"},
        { text: 'Kuala Lumpur Sultan Abdul Aziz Shah Airport', value: "Kuala Lumpur (SZB)"},
        { text: 'Tokyo Haneda Japan', value: "Tokyo (HND)"},
        { text: 'Kansai International Japan', value: "Osaka (KIX)"},
        { text: 'Manash International Aiport', value: "Bishkek (FRU)"},
        { text: 'Turkmenbashi International Airport', value: "Turkmenbashi (KRW)"},
        { text: 'Dili Presidente Nicolau Lobato international Airport', value:"Dili (DIL)"},
        { text: 'Shashi Airport', value:"Hubei (SHS)"},
        { text: 'Nakashibetsu Airport', value:"Hokkaido (SHB)"},
        { text: 'Miyako Shimojishima Airport', value:"Okinawa (SHI)"},
        { text: 'Alxa Left Banner Bayanhot Airport', value:"Alxa Left Banner (AXF)"},
        { text: 'Ulanqab Jining Airport China', value: "Ulanqab (UCB)"},
        { text: 'San Pedro Airport Cote D`Ivoire', value: "San Pedro (SPY)"},
        { text: 'Aéroport de La Réunion Roland Garros', value:"Réunion (RUN)"},
        { text: 'Nakhon Ratchasima Airport', value: "Nakhon Ratchasima (NAK)"},
        { text: 'Maré Airport', value: "La Roche (MEE)"},
        { text: 'Île des Pins Airport', value: "Île des Pins (ILP)"},
        { text: 'Anadyr Airport', value: "Chukotka Autonomous Okrug (DYR)"},
        { text: 'New Bight Airport', value: "Cat Island (CAT)"},
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
        { text: 'Halim Perdanakusuma, Jakarta', value: "Jakarta (HLP)"},
        { text: 'Achmad Yani, Semarang', value: "Semarang (SRG)"},
        { text: 'Soekarno-Hatta, Banten', value: "Banten (CGK)"},
        { text: 'Kuala Namu  Deli Serdang, Medan', value: "Sumatera Utara (KNO)"},
        { text: 'Minangkabau International Airport, Padang', value: "Padang (PDG)"},
        { text: 'Raja Haji Fisabilillah,  Tanjungpinang', value: "Tanjungpinang (TNJ)"},
        { text: 'Husein Sastranegara, Bandung', value: "Bandung (BDO)"},
        { text: 'Pyongyang Airport, Pyongyang', value: "Pyongyang (FNJ)"},
        { text: 'Seletar Airport, Singapore', value: "Singapore (XSP)"},
        { text: 'Singapore Changi Airport, Singapore', value: "Singapore (SIN)"},
        { text: 'Kuala Lumpur International Airport, Kuala Lumpur', value: "Kuala Lumpur (KUL)"},
        { text: 'JOG  Adi Sutjipto, Sleman', value: "Sleman (JOG)"},
        { text: 'Kuala Lumpur Sultan Abdul Aziz Shah Airport', value: "Kuala Lumpur (SZB)"},
        { text: 'Tokyo Haneda Japan', value: "Tokyo (HND)"},
        { text: 'Kansai International Japan', value: "Osaka (KIX)"},
        { text: 'Manash International Aiport', value: "Bishkek (FRU)"},
        { text: 'Turkmenbashi International Airport', value: "Turkmenbashi (KRW)"},
        { text: 'Dili Presidente Nicolau Lobato international Airport', value:"Dili (DIL)"},
        { text: 'Shashi Airport', value:"Hubei (SHS)"},
        { text: 'Nakashibetsu Airport', value:"Hokkaido (SHB)"},
        { text: 'Miyako Shimojishima Airport', value:"Okinawa (SHI)"},
        { text: 'Alxa Left Banner Bayanhot Airport', value:"Alxa Left Banner (AXF)"},
        { text: 'Ulanqab Jining Airport China', value: "Ulanqab (UCB)"},
        { text: 'San Pedro Airport Cote D`Ivoire', value: "San Pedro (SPY)"},
        { text: 'Aéroport de La Réunion Roland Garros', value:"Réunion (RUN)"},
        { text: 'Nakhon Ratchasima Airport', value: "Nakhon Ratchasima (NAK)"},
        { text: 'Maré Airport', value: "La Roche (MEE)"},
        { text: 'Île des Pins Airport', value: "Île des Pins (ILP)"},
        { text: 'Anadyr Airport', value: "Chukotka Autonomous Okrug (DYR)"},
        { text: 'New Bight Airport', value: "Cat Island (CAT)"},
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


const seatWhite = Vue.createApp({
  data(){
    return {
      searchInput: "",
      inputText: "",
      textAreaContent: "",
      selected: "Search",
      options: [
        { text: 'Economy Class', value: "Economy Class"},
        { text: 'Business Class', value: "Business Class"},
        { text: 'First Class', value: "First Class"},
      ],
      checkedOptions:[],
      radioButtonPicked: ""
    }
  }
})
seatWhite.mount("#seatWhite")

const seatModal = Vue.createApp({
  data(){
    return {
      searchInput: "",
      inputText: "",
      textAreaContent: "",
      selected: "Search",
      options: [
        { text: 'Economy Class', value: "Economy Class"},
        { text: 'Premium Class', value: "Premium Class"},
        { text: 'First Class', value: "First Class"},
      ],
      checkedOptions:[],
      radioButtonPicked: ""
    }
  }
})
seatModal.mount("#seatModal")