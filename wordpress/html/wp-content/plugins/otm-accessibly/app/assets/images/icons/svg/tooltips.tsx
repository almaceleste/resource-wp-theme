interface Props {
  color: string | "#D0DEE6",
}
const Tooltips = (props: Props) => {
  return (
    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="1" y="1" width="58" height="58" rx="4" fill="white" stroke={props.color} strokeWidth="2"/>
      <path d="M21.1193 18.8062H39.6268C40.2404 18.8062 40.8288 19.0499 41.2626 19.4837C41.6965 19.9176 41.9402 20.506 41.9402 21.1196V35.0002C41.9402 35.6137 41.6965 36.2022 41.2626 36.636C40.8288 37.0699 40.2404 37.3136 39.6268 37.3136H34.9999L30.3731 41.9405L25.7462 37.3136H21.1193C20.5058 37.3136 19.9173 37.0699 19.4835 36.636C19.0496 36.2022 18.8059 35.6137 18.8059 35.0002V21.1196C18.8059 20.506 19.0496 19.9176 19.4835 19.4837C19.9173 19.0499 20.5058 18.8062 21.1193 18.8062ZM22.2761 22.2763V24.5897H38.4701V22.2763H22.2761ZM22.2761 26.9032V29.2166H33.8432V26.9032H22.2761ZM22.2761 31.53V33.8435H36.1567V31.53H22.2761Z" fill={props.color}/>
    </svg>
  )
}
export default Tooltips;
