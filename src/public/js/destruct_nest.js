const member_four = {
    fullname: '佐藤理央',
    address: {
        prefecture: '静岡県',
        city: '藤枝市'
    }
};

const { address, address: { city } } = member_four;
console.log(address);
console.log(city);