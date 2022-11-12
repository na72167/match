import Cookies from "js-cookie";

const state = {
  query:{
    p: 1,
    // arr: ''
  }
}

const getters = {
  paginationState: state => state.query.p,
}

const mutations = {
  // SET_HEADER_MENU_LOGGEDIN () {
  //   state.headerMenu = headerMenuLoggedIn;
  // },
  // SET_HEADER_MENU_GUESTS () {
  //   state.headerMenu = headerMenuGuests;
  // }
}

const actions = {
  // setHeaderMenuLoggedIn (context) {
  //   context.commit('SET_HEADER_MENU_LOGGEDIN');
  // },
  // setHeaderMenuGuests (context) {
  //   context.commit('SET_HEADER_MENU_GUESTS');
  // }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}