const member_three = {
    fullname: '佐藤理央',
    sex: 'female',
    age: 18
};

const { fullname, sex, memo = '---' } = member_three;
console.log(sex, fullname, memo);