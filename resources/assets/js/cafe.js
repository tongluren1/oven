/**
 * Imports the OVEN API URL from the config.
 */
import { OVEN_CONFIG } from "./config";

export default {
  /**
   * GET /api/v1/cafes
   */
  getCafes: function () {
    return axios.get(OVEN_CONFIG.API_URL + '/cafes')
  },

  /**
   * GET /api/v1/cafes/{cafeID}
   */
  getCafe: function (cafeID) {
    return axios.get(OVEN_CONFIG.API_URL + '/cafe/' + cafeID)
  },

  /**
   * POST /api/v1/cafes
   */
  postAddNewCafe: function (name, address, city, state, zip) {
    return axios.post(OVEN_CONFIG.API_URL + '/cafes', {
      name: name,
      address: address,
      city: city,
      state: state,
      zip: zip
    });
  }
}