/**
 * Created by nick on 5/25/17.
 */
import axios from 'axios';

class authService
{
   constructor()
   {
       this.token = this.getTokenFromStore();
       this.user=this.getUserFromLocalStore();//initialized empty values
       this.offlineMode = false;//default value
   }

   //
    isLoggedIn()
    {
        //to avoid unnecessary work, check if the user  & token props are defined (they both were loaded from local store)
        if (this.user && this.token)
        {//they are, so the user must be logged in. So return true and skip everything else
            return true;
        }
        else if (this.token)
        {//else, the token exists, but there is no user object
            //
            //first, check for internet
            if (navigator.onLine)
            {//online, so let's try to get the user using the token
                this.user=this.getUserFromServer();
                if (this.user)
                {//user object is defined
                    return true;
                }
                else
                {//couldn't get the user from the server, so they're not logged in / the token is bad
                    this.token=false;
                    return false;
                }

            }
            else
            {//can't get user without internet, so they aren't logged in.
                return false;
            }
        }
        else
        {//else no token
            //if the user object is defined and no internet connection is available, let them work offline for now
            if (!navigator.onLine)
            {
                //this will allow them to make changes, but these changes can't be synced with the server until they have a token again
                this.offlineMode=true;
                return true;
            }//if
            else
            {//not logged in
                return false;
            }//else
        }//no token
    }
    //
    getTokenFromStore()
    {
        if(typeof(Storage) !== "undefined")
        {
            let accessToken = localStorage.getItem("skaterSpace_access_token");
            if (accessToken)
            {
                axios.defaults.headers.common['Authorization']='Bearer '+accessToken;

                return {
                    access:accessToken
                };
            }
            else
            {
                return false;
            }
        }
        else
        {
            //code for loading token from cookies as fallback
        }
    }
    getUserFromLocalStore()
    {
        if(typeof(Storage) !== "undefined")
        {
            let user = localStorage.getItem("skaterSpace_user_object");
            if (user)
            {

                return JSON.parse(user);
            }
            else
            {
                return false;
            }
        }
        else
        {
            //code for loading token from cookies as fallback
        }
    }
    getUserFromServer()
    {
        axios.get('/api/user')
            .then(response => {
                this.putUserInLocalStorage(response.data);
                this.user= response.data;
            });
    }

    putUserInLocalStorage(userObject)
    {
        if(typeof(Storage) !== "undefined")
        {
            localStorage.setItem('skaterSpace_user_object', JSON.stringify(userObject));
        }//if localStorage is available
    }
    putTokenInLocalStorage(access)
    {
        if(typeof(Storage) !== "undefined")
        {
            localStorage.setItem('skaterSpace_access_token', access);
        }//if localStorage is available
    }

    setAfterLogin(token,user)
    {
        this.token=token;
        this.user=user;
        this.putTokenInLocalStorage(token);
        this.putUserInLocalStorage(user);
        axios.defaults.headers.common['Authorization']='Bearer '+token;

    }


}

let Auth = new authService();//global auth Service
//
export function requireAuth(to, from, next) {
    if (!Auth.isLoggedIn()) {
        next({
            path: '/login',
            query: { redirect: to.fullPath }
        });
    } else {
        next();
    }
}

export function requireNoAuth(to,from,next)
{
    if (Auth.isLoggedIn()) {
        next({
            path: '/'
        });
    } else {
        next();
    }
}
export default Auth;