class EstimationElement {
    constructor(type = null){
        this.type = type;
    }
}

class EstimationItem {
    constructor(name, price, spec = ''){
        this.name = name;
        this.price = price;
        this.spec = spec;
    }
}