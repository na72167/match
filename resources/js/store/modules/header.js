import Cookies from "js-cookie";
import { headerMenuLoggedIn,headerMenuGuests } from '@/utils/header-mapping';

const state = {
  headerMenu: headerMenuGuests,
}

const getters = {
}

const mutations = {
  SET_HEADER_MENU_LOGGEDIN () {
    state.headerMenu = headerMenuLoggedIn;
  },
  SET_HEADER_MENU_GUESTS () {
    state.headerMenu = headerMenuGuests;
  }
}

const actions = {
  setHeaderMenuLoggedIn (context) {
    context.commit('SET_HEADER_MENU_LOGGEDIN');
  },
  setHeaderMenuGuests (context) {
    context.commit('SET_HEADER_MENU_GUESTS');
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
