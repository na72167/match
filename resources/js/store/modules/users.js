import Cookies from "js-cookie";

// 配列で纏めると空かどうかの判定が若干面倒になる。
const state = {
  userId: '',
  userEmail: '',
  userRoll: '',
}

const getters = {
}

const mutations = {
  SET_LOGIN_USER(state) {
    state.userId = Cookies.get('user_id');
    state.userEmail = Cookies.get('email');
    state.userRoll = Cookies.get('roll');
  }
}

const actions = {
  setLoginUserInfo (context) {
    context.commit('SET_LOGIN_USER');
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}