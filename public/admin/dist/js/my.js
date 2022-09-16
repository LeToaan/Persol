// Đối tượng `Validator`
function Validator(options) {
    function getParent(element, selector) {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    var selectorRules = {};

    // Hàm thực hiện validate
    function validate(inputElement, rule) {
        var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
        var errorMessage;

        // Lấy ra các rules của selector
        var rules = selectorRules[rule.selector];
        
        // Lặp qua từng rule & kiểm tra
        // Nếu có lỗi thì dừng việc kiểm
        for (var i = 0; i < rules.length; ++i) {
            switch (inputElement.type) {
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ':checked')
                    );
                    break;
                default:
                    errorMessage = rules[i](inputElement.value);
            }
            if (errorMessage) break;
        }
        
        if (errorMessage) {
            errorElement.innerHTML = '<br>'+ errorMessage;
           
            inputElement.classList.add('is-invalid')
        } else {
            errorElement.innerHTML = '';
           
            inputElement.classList.remove('is-invalid')
            inputElement.classList.add('is-valid')
        }

        return !errorMessage;
    }

    // Lấy element của form cần validate
    var formElement = document.querySelector(options.form);
    if (formElement) {
       // Khi submit form
       formElement.onsubmit = function(form){
        form.preventDefault(); 
        var checkError1=true
        options.rules.forEach(function (rule) {
            var inputElements = formElement.querySelectorAll(rule.selector);
            // Lưu lại các rules cho mỗi input
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }
            var inputElements = formElement.querySelectorAll(rule.selector);

            Array.from(inputElements).forEach(function (inputElement) {
               
                  checkError =  validate(inputElement, rule);
                  if(!checkError){
                    checkError1=false;
                  }
        
               
            });
        });
        if(checkError1) {
            formElement.submit()
        }
        
       }

        // Lặp qua mỗi rule và xử lý (lắng nghe sự kiện blur, input, ...)
        options.rules.forEach(function (rule) {

            // Lưu lại các rules cho mỗi input
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            var inputElements = formElement.querySelectorAll(rule.selector);

            Array.from(inputElements).forEach(function (inputElement) {
               // Xử lý trường hợp blur khỏi input
                inputElement.onblur = function () {
                    validate(inputElement, rule);
                   
                }

                // Xử lý mỗi khi người dùng nhập vào input
                inputElement.oninput = function () {
                    var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
                    errorElement.innerText = '';
                    getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
                } 
            });
        });
    }

}



// Định nghĩa rules
// Nguyên tắc của các rules:
// 1. Khi có lỗi => Trả ra message lỗi
// 2. Khi hợp lệ => Không trả ra cái gì cả (undefined)
Validator.isRequired = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            return value ? undefined :  message || 'Vui lòng nhập trường này'
        }
    };
}
Validator.isEmail = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined :  message || 'Trường này phải là email';
        }
    };
}


Validator.minLength = function (selector, min, message) {
    return {
        selector: selector,
        test: function (value) {
            if(!value){
                return undefined;
            }
            return value.length >= min ? undefined :  message || `Vui lòng nhập tối thiểu ${min} kí tự`;
        }
    };
}
Validator.maxLength = function (selector, max, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.length <= max ? undefined :  message || `số ký tự vượt quá  ${max} kí tự`;
        }
    };
}
Validator.checkNumber = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            value.trim()
            if(!value){
                return undefined;
            }
            return  !isNaN(value)  ? undefined :  message || `đây ko phải là số`;
        }
    };
}
Validator.rangeInterger = function (selector,min,max, message) {
    return {
        selector: selector,
        test: function (value) {
            
            return value <= max && value >= min  ? undefined :  message || `thang điểm từ ${min}->${max}`;
        }
    };
}
Validator.isConfirmed = function (selector, getConfirmValue, message) {
    return {
        selector: selector,
        test: function (value) {
            
            return value === getConfirmValue() ? undefined : message || 'Giá trị nhập vào không chính xác';
        }
    }
}
Validator.isImage = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
           
            var regex = /\.(gif|jpe?g|tiff?|png|webp|bmp)$/i;
            if(!value){
                return undefined;
            }
            
            
            
            return regex.test(value) ? undefined  : message || 'Trường này phải là email';
        }
    };
}
//cái function này dùng để cho cái label hiện tên file khi chọn
function changImage(name){
    var elementImage =document.querySelector('#image'+name+' .custom-file-input')
    var valueImage= elementImage.value
    
    if(!valueImage){
         document.querySelector('#image'+name+' .custom-file-label').innerText="Choose File";
         return;
    }
    // valueImage.lastindexOf(chuỗi)
    // valueImage=valueImage.slice(valueImage.lastindexOf(chuỗi));
   var b = valueImage.lastIndexOf ("\\");
   valueImage= valueImage.slice(b+1);
   document.querySelector('#image'+name+' .custom-file-label').innerText=valueImage;
   
   
    
 }
function addImage(vitri) {
    //đựng giá trị lưa trữ
   check=   document.querySelector('#vitri').value;
   if(vitri==6){
    return window.alert("Max Image")
   }
    if(check==vitri){
        vitri++;
        document.querySelector('#vitri').value= vitri ;  
        console.log(document.querySelector('#vitri'))  ;  
      document.querySelector('#form-1 .card-body #newimage').innerHTML +='<div class="form-group" id="image'+vitri+'" ><div class="input-group"><div class="custom-file"><input type="file" class="custom-file-input" required accept="image/png, image/jpeg" id="image2'+vitri+'" onchange="changImage('+vitri+')" name="image_product[]"><label class="custom-file-label" for="exampleInputFile">Choose file</label></div><div class="input-group-append"><span class="input-group-text" onclick="addImage('+vitri+')" >+</span></div><div class="input-group-append"><span class="input-group-text" onclick="minusImgae('+vitri+')" >-</span></div><div class="input-group-append" ><input type="text" required placeholder="category image"  id="category_image'+vitri+'" name="category_image[]"></div></div><span class="form-message"></span></div>'
      return
    }
    console.log(check);
    
  

}
function minusImgae(vitri){
    check=document.querySelector('#vitri').value;
     if(check==vitri){
        var parent=document.querySelector('#form-1 .card-body #newimage');
        var child = document.querySelector('#image'+vitri);
        vitri--;
        document.querySelector('#vitri').value= vitri;
        parent.removeChild(child);
     }
   
}
function met(vitri){
   
   document.querySelector('#vitri').value=vitri;
    
}
function hayqua(){
   console.log(document.querySelector('#form-1 #image22'));
}
