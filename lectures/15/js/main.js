var acc_balance = document.getElementById("balance");
var info = {
    name : "Faisal Jawad",
    balance : 2000000,
    currency : "PKR",
    IBAN : "PK35MEZN0003000210108884"
};

function input_data()
{
    var acc_title = document.getElementById("title");
    acc_title.innerText = info.name;
    acc_balance.value = info.balance;
    acc_balance.innerText = acc_balance.value;
    var acc_currency = document.getElementById("currency");
    acc_currency.innerText = info.currency;
    var acc_IBAN = document.getElementById("IBAN");
    acc_IBAN.innerText = info.IBAN;
}

function deposit()
{
    var acc_deposit = document.getElementById("deposit");
    if(event.key === "Enter")
    {
        var data = parseInt(acc_deposit.value,10);
        result = Number.isInteger(data);
        if(result && data > 0)
        {
            acc_balance.value+=parseInt(acc_deposit.value,10);
            acc_balance.innerText = acc_balance.value;
            acc_deposit.value = "";
            var table_transaction = document.getElementById("transaction-table");
            table_transaction.innerHTML+='<tr>\n' +
                '        <td align="left" valign="middle" scope="col">'+Date()+'</td>\n' +
                '        <td align="left" valign="middle" scope="col">'+"Credit"+'</td>\n' +
                '        <td align="left" valign="middle" scope="col">'+data+'</td>\n' +
                '    </tr>';
        }
        else
        {
            var error_msg = document.getElementById("deposit-msg");
            error_msg.innerText = "Enter Valid Amount!"
        }
    }
}

function withdraw()
{
    var acc_withdraw = document.getElementById("withdraw");
    if(event.key === "Enter")
    {
        var data = parseInt(acc_withdraw.value,10);
        result = Number.isInteger(data);
        if(data < acc_balance.value && data > 0 && result)
        {
            acc_balance.value = acc_balance.value - parseInt(acc_withdraw.value,10);
            acc_balance.innerText = acc_balance.value;
            acc_withdraw.value = "";
            var table_transaction = document.getElementById("transaction-table");
            table_transaction.innerHTML+='<tr>\n' +
                '        <td align="left" valign="middle" scope="col">'+Date()+'</td>\n' +
                '        <td align="left" valign="middle" scope="col">'+"Debit"+'</td>\n' +
                '        <td align="left" valign="middle" scope="col">'+data+'</td>\n' +
                '    </tr>';
        }
        else
        {
            var error_msg = document.getElementById("withdraw-msg");
            error_msg.innerText = "Don't have sufficient amount in account!";
        }
    }
}

input_data();