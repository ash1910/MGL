    <!-- Add New Quote Modal -->
    <div class="modal fade" id="addNewQuote" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-6">
              <h4 class="address-title mb-2">Let Us Know Your Requirement</h4>
            </div>
            <form id="addNewQuoteForm" class="row g-6" onsubmit="return false">
              <div class="col-12 form-control-validation col-12">
                <label class="form-label" for="modalName">Name</label>
                <input
                  type="text"
                  id="modalName"
                  name="modalName"
                  class="form-control"
                  placeholder="Enter your name" />
              </div>
              <div class="col-12">
                <label class="form-label" for="modalMobile">Mobile number</label>
                <input
                  type="text"
                  id="modalMobile"
                  name="modalMobile"
                  class="form-control"
                  placeholder="Enter your mobile number" />
              </div>
              <div class="col-12">
                <label class="form-label" for="modalEmail">Email</label>
                <input
                  type="text"
                  id="modalEmail"
                  name="modalEmail"
                  class="form-control"
                  placeholder="Enter your email" />
              </div>
              <div class="col-12">
                <label class="form-label" for="modalFabricCategory">Fabric category</label>
                <div class="mgl-radio-group" style="display: flex; flex-wrap: wrap; gap: 12px;">
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-cotton">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Cotton </span>
                        </span>
                        <input
                          name="fabric-category"
                          class="form-check-input"
                          type="radio"
                          value="cotton"
                          id="f-cotton"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-rayon">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Rayon </span>
                        </span>
                        <input
                          name="fabric-category"
                          class="form-check-input"
                          type="radio"
                          value="rayon"
                          id="f-rayon"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-polyester">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Polyester </span>
                        </span>
                        <input
                          name="fabric-category"
                          class="form-check-input"
                          type="radio"
                          value="polyester"
                          id="f-polyester"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-blends">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Blends </span>
                        </span>
                        <input
                          name="fabric-category"
                          class="form-check-input"
                          type="radio"
                          value="blends"
                          id="f-blends"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-denim">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Denim </span>
                        </span>
                        <input
                          name="fabric-category"
                          class="form-check-input"
                          type="radio"
                          value="denim"
                          id="f-denim"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-nylon">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Nylon </span>
                        </span>
                        <input
                          name="fabric-category"
                          class="form-check-input"
                          type="radio"
                          value="nylon"
                          id="f-nylon"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-sustainable">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Sustainable </span>
                        </span>
                        <input
                          name="fabric-category"
                          class="form-check-input"
                          type="radio"
                          value="sustainable"
                          id="f-sustainable"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-linen">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Linen </span>
                        </span>
                        <input
                          name="fabric-category"
                          class="form-check-input"
                          type="radio"
                          value="linen"
                          id="f-linen"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-others">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Others </span>
                        </span>
                        <input
                          name="fabric-category"
                          class="form-check-input"
                          type="radio"
                          value="others"
                          id="f-others"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <label class="form-label" for="modalRequirement">Requirement</label>
                <div class="mgl-radio-group" style="display: flex; flex-wrap: wrap; gap: 12px;">
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="r-greige">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Greige </span>
                        </span>
                        <input
                          name="requirement"
                          class="form-check-input"
                          type="radio"
                          value="greige"
                          id="r-greige"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="r-yarn-dyed">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Yarn dyed </span>
                        </span>
                        <input
                          name="requirement"
                          class="form-check-input"
                          type="radio"
                          value="yarn dyed"
                          id="r-yarn-dyed"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="r-rfd">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> RFD </span>
                        </span>
                        <input
                          name="requirement"
                          class="form-check-input"
                          type="radio"
                          value="rfd"
                          id="r-rfd"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="r-dyed">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Dyed </span>
                        </span>
                        <input
                          name="requirement"
                          class="form-check-input"
                          type="radio"
                          value="dyed"
                          id="r-dyed"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="r-printed">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Printed </span>
                        </span>
                        <input
                          name="requirement"
                          class="form-check-input"
                          type="radio"
                          value="printed"
                          id="r-printed"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <label class="form-label" for="modalQuantityRequired">Quantity required</label>
                <div class="mgl-radio-group" style="display: flex; flex-wrap: wrap; gap: 12px;">
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="q-less-than-3000-m">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> less than 3,000 m </span>
                        </span>
                        <input
                          name="quantity-required"
                          class="form-check-input"
                          type="radio"
                          value="less than 3,000 m"
                          id="q-less-than-3000-m"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="q-3000-to-5000-m">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> 3,000 m to 5,000 m </span>
                        </span>
                        <input
                          name="quantity-required"
                          class="form-check-input"
                          type="radio"
                          value="3,000 m to 5,000 m"
                          id="q-3000-to-5000-m"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="q-above-5000-m">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Above 5,000 m </span>
                        </span>
                        <input
                          name="quantity-required"
                          class="form-check-input"
                          type="radio"
                          value="above 5,000 m"
                          id="q-above-5000-m"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 text-center">
                <button
                  type="reset"
                  class="btn btn-label-secondary me-3"
                  data-bs-dismiss="modal"
                  aria-label="Close">
                  Cancel
                </button>
                <button type="submit" class="btn btn-primary">Request a Quote</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--/ Add New Quote Modal -->

    <!-- Add New Quote Modal -->
    <div class="modal fade" id="addNewQuoteWithProduct" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-6">
              <h4 class="address-title mb-2">Share your requirement</h4>
            </div>
            <form id="addNewQuoteWithProductForm" class="row g-6" onsubmit="return false"> 
              <div class="col-12 form-control-validation col-12">
                <label class="form-label" for="modalName">Name</label>
                <input
                  type="text"
                  id="modalName"
                  name="modalName"
                  class="form-control"
                  placeholder="Enter your name" />
              </div>
              <div class="col-12">
                <label class="form-label" for="modalMobile">Mobile number</label>
                <input
                  type="text"
                  id="modalMobile"
                  name="modalMobile"
                  class="form-control"
                  placeholder="Enter your mobile number" />
              </div>
              <div class="col-12">
                <label class="form-label" for="modalEmail">Email</label>
                <input
                  type="text"
                  id="modalEmail"
                  name="modalEmail"
                  class="form-control"
                  placeholder="Enter your email" />
              </div>
              <div class="col-12">
                <label class="form-label" for="modalFabricCategory">Fabric category</label>
                <div class="mgl-radio-group" style="display: flex; flex-wrap: wrap; gap: 12px;">
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-cotton-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Cotton </span>
                        </span>
                        <input
                          name="fabric-category-p"
                          class="form-check-input"
                          type="radio"
                          value="cotton"
                          id="f-cotton-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-rayon-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Rayon </span>
                        </span>
                        <input
                          name="fabric-category-p"
                          class="form-check-input"
                          type="radio"
                          value="rayon"
                          id="f-rayon-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-polyester-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Polyester </span>
                        </span>
                        <input
                          name="fabric-category-p"
                          class="form-check-input"
                          type="radio"
                          value="polyester"
                          id="f-polyester-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-blends-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Blends </span>
                        </span>
                        <input
                          name="fabric-category-p"
                          class="form-check-input"
                          type="radio"
                          value="blends"
                          id="f-blends-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-denim-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Denim </span>
                        </span>
                        <input
                          name="fabric-category-p"
                          class="form-check-input"
                          type="radio"
                          value="denim"
                          id="f-denim-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-nylon-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Nylon </span>
                        </span>
                        <input
                          name="fabric-category-p"
                          class="form-check-input"
                          type="radio"
                          value="nylon"
                          id="f-nylon-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-sustainable-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Sustainable </span>
                        </span>
                        <input
                          name="fabric-category-p"
                          class="form-check-input"
                          type="radio"
                          value="sustainable"
                          id="f-sustainable-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-linen-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Linen </span>
                        </span>
                        <input
                          name="fabric-category-p"
                          class="form-check-input"
                          type="radio"
                          value="linen"
                          id="f-linen-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="f-others-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Others </span>
                        </span>
                        <input
                          name="fabric-category-p"
                          class="form-check-input"
                          type="radio"
                          value="others"
                          id="f-others-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <label class="form-label" for="modalRequirement">Requirement</label>
                <div class="mgl-radio-group" style="display: flex; flex-wrap: wrap; gap: 12px;">
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="r-greige-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Greige </span>
                        </span>
                        <input
                          name="requirement-p"
                          class="form-check-input"
                          type="radio"
                          value="greige"
                          id="r-greige-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="r-yarn-dyed-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Yarn dyed </span>
                        </span>
                        <input
                          name="requirement-p"
                          class="form-check-input"
                          type="radio"
                          value="yarn dyed"
                          id="r-yarn-dyed-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="r-rfd-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> RFD </span>
                        </span>
                        <input
                          name="requirement-p"
                          class="form-check-input"
                          type="radio"
                          value="rfd"
                          id="r-rfd-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="r-dyed-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Dyed </span>
                        </span>
                        <input
                          name="requirement-p"
                          class="form-check-input"
                          type="radio"
                          value="dyed"
                          id="r-dyed-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="r-printed-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Printed </span>
                        </span>
                        <input
                          name="requirement-p"
                          class="form-check-input"
                          type="radio"
                          value="printed"
                          id="r-printed-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <label class="form-label" for="modalSubcategory">Subcategory</label>
                <select id="modalSubcategory" class="select2 form-select" data-allow-clear="true" name="subcategory">
                  <option value="Cambric">Cambric</option>
                  <option value="Voile">Voile</option>
                  <option value="Poplin">Poplin</option>
                  <option value="Double cloth">Double cloth</option>
                  <option value="Sheeting">Sheeting</option>
                  <option value="Drill">Drill</option>
                  <option value="Duck">Duck</option>
                  <option value="Twill">Twill</option>
                  <option value="Slub">Slub</option>
                  <option value="Duck">Duck</option>
                  <option value="Dobbies">Dobbies</option>
                  <option value="Twill">Twill</option>
                  <option value="Crepe">Crepe</option>
                  <option value="Jacquard">Jacquard</option>
                  <option value="Gauze">Gauze</option>
                  <option value="Lurex">Lurex</option>
                  <option value="Velvet">Velvet</option>
                  <option value="Flannel">Flannel</option>
                  <option value="Satin">Satin</option>
                  <option value="Canvas">Canvas</option>
                  <option value="Plain">Plain</option>
                  <option value="Single Jersey">Single Jersey</option>
                  <option value="Pique">Pique</option>
                  <option value="Terry">Terry</option>
                  <option value="Fleece">Fleece</option>
                  <option value="Interlock">Interlock</option>
                  <option value="Flex">Flex</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label" for="modalQuantityRequired">Quantity required</label>
                <div class="mgl-radio-group" style="display: flex; flex-wrap: wrap; gap: 12px;">
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="q-less-than-3000-m-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> less than 3,000 m </span>
                        </span>
                        <input
                          name="quantity-required-p"
                          class="form-check-input"
                          type="radio"
                          value="less than 3,000 m"
                          id="q-less-than-3000-m-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="q-3000-to-5000-m-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> 3,000 m to 5,000 m </span>
                        </span>
                        <input
                          name="quantity-required-p"
                          class="form-check-input"
                          type="radio"
                          value="3,000 m to 5,000 m"
                          id="q-3000-to-5000-m-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                  <div class="mgl-radio-group-item">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="q-above-5000-m-p">
                        <span class="custom-option-body mb-0">
                          <span class="custom-option-title mb-0"> Above 5,000 m </span>
                        </span>
                        <input
                          name="quantity-required-p"
                          class="form-check-input"
                          type="radio"
                          value="above 5,000 m"
                          id="q-above-5000-m-p"
                          style="display: none;" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 text-center">
                <button
                  type="reset"
                  class="btn btn-label-secondary me-3"
                  data-bs-dismiss="modal"
                  aria-label="Close">
                  Cancel
                </button>
                <button type="submit" class="btn btn-warning">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--/ Add New Quote Modal -->

    <!-- Add New Register Modal -->
    <div class="modal fade" id="addNewRegister" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-md modal-simple modal-add-new-address">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-6">
              <h4 class="address-title mb-2">Fill Details</h4>
            </div>
            <form id="addNewRegisterForm" class="row g-6" onsubmit="return false">
              <div class="col-12 form-control-validation col-12">
                <label class="form-label" for="modalName">Name</label>
                <input
                  type="text"
                  id="modalName"
                  name="modalName"
                  class="form-control"
                  placeholder="Enter your name" />
              </div>
              <div class="col-12">
                <label class="form-label" for="modalMobile">Mobile number</label>
                <input
                  type="text"
                  id="modalMobile"
                  name="modalMobile"
                  class="form-control"
                  placeholder="Enter your mobile number" />
              </div>
              <div class="col-12">
                <label class="form-label" for="modalCompanyName">Company name</label>
                <input
                  type="text"
                  id="modalCompanyName"
                  name="modalCompanyName"
                  class="form-control"
                  placeholder="Enter your company name" />
              </div>
              <div class="col-12">
                <label class="form-label" for="modalEmail">Email</label>
                <input
                  type="text"
                  id="modalEmail"
                  name="modalEmail"
                  class="form-control"
                  placeholder="Enter your email" />
              </div>

              <div class="col-12 text-center">
                <button
                  type="reset"
                  class="btn btn-label-secondary me-3"
                  data-bs-dismiss="modal"
                  aria-label="Close">
                  Cancel
                </button>
                <button type="submit" class="btn btn-info">Request a Quote</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--/ Add New Register Modal -->

    <!-- Add New Call Back Modal -->
    <div class="modal fade" id="addNewCallBack" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-md modal-simple modal-add-new-address">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-6">
              <h4 class="address-title mb-2">Fill Details</h4>
            </div>
            <form id="addNewCallBackForm" class="row g-6" onsubmit="return false">
              <div class="col-12 form-control-validation col-12">
                <label class="form-label" for="modalName">Name</label>
                <input
                  type="text"
                  id="modalName"
                  name="modalName"
                  class="form-control"
                  placeholder="Enter your name" />
              </div>
              <div class="col-12">
                <label class="form-label" for="modalMobile">Mobile number</label>
                <input
                  type="text"
                  id="modalMobile"
                  name="modalMobile"
                  class="form-control"
                  placeholder="Enter your mobile number" />
              </div>
              <div class="col-12">
                <label class="form-label" for="modalEmail">Email</label>
                <input
                  type="text"
                  id="modalEmail"
                  name="modalEmail"
                  class="form-control"
                  placeholder="Enter your email" />
              </div>

              <div class="col-12 text-center">
                <button
                  type="reset"
                  class="btn btn-label-secondary me-3"
                  data-bs-dismiss="modal"
                  aria-label="Close">
                  Cancel
                </button>
                <button type="submit" class="btn btn-label-primary waves-effect">Request a Call Back</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--/ Add New Call Back Modal -->