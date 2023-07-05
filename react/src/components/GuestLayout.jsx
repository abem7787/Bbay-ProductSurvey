import React from "react"
import { Outlet, Navigate } from "react-router-dom"
import { useStateContext } from "../contexts/ContextProvider"



export default function GuestLayout() {
  const {currentUser, userToken} = useStateContext();

  if(userToken){
    return <Navigate to="/"/>

  }
    return (
      <>
        {/*
          This example requires updating your template:
  
          ```
          <html class="h-full bg-white">
          <body class="h-full">
          ```
        */}
        <div className="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8">
          <div className="sm:mx-auto sm:w-full sm:max-w-sm">
           <Outlet/>
          </div>
  
       
        </div>
      </>
    )
  }